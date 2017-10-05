<?php

namespace App\Providers;

use App\Permissao;
use App\User;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);
        
        /* 
         * Verifica todas as permissões e compara com as permissoes do usuário - Dinâmico 
         * 
         * https://laravel.com/docs/5.2/authorization
         */
        $permissoes = Permissao::with('perfil')->get();
        foreach ($permissoes as $permissao) {
            $gate->define($permissao->nome, function(User $user) use ($permissao){
                return $user->hasPermission($permissao); //Se retornar true passa
            });
        }
        
        // Verifica se o usuario tem perfil de SUPER USUÁRIO
        // Mesmo sem nenhuma permissão adicionada, se o perfil estiver aqui, passará pelo @can 
        $gate->before(function(User $user, $ability){
            if($user->hasAnyPerfil('super_user'))
                return true;
        });        
    }
}
