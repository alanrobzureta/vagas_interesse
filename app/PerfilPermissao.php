<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerfilPermissao extends Model
{
    protected $table = "perfis_permissoes";
    
    protected $fillable = [
        'fk_perfil', 'fk_permissao'
    ];
}
