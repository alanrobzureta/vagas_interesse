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

        $permissoes = Permissao::with('perfil')->get();
        foreach ($permissoes as $permissao) {
            $gate->define($permissao->nome, function(User $user) use ($permissao){
                return $user->hasPermission($permissao);
            });
        }
        
    }
}
