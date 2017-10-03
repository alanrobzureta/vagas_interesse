<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPerfil extends Model
{
    protected $table = "users_perfis";
    
    protected $fillable = [
        'fk_user', 'fk_perfil'
    ];
}
