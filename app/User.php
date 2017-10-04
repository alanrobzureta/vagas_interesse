<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','cpf'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function perfil() {
        return $this->belongsToMany('App\Perfil', 'users_perfis', 'fk_user', 'fk_perfil');
    }
    
    public function hasPermission(Permissao $permissao) {
        return $this->hasAnyPerfil($permissao->perfil);
    }
    
    public function hasAnyPerfil($perfis) {
        if(is_array($perfis) || is_object($perfis)){
            return !! $perfis->intersect($this->perfil)->count();
        }
        
        return $this->perfil->contains('nome', $perfis);
    }
}
