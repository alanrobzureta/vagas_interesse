<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissao extends Model
{
    protected $table = "permissoes";
    
    protected $primaryKey = "id_permissao";
    
    protected $fillable = [
        'nome'
    ];
}
