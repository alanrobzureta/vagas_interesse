<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = "perfis";
    
    protected $primaryKey = "id_perfil";
    
    protected $fillable = [
        'nome'
    ];
}
