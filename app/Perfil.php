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
    
    public function permissao() {
        return $this->belongsToMany(Permissao::class, 'perfis_permissoes', 'fk_perfil','fk_permissao');
    }
    
    public function user() {
        return $this->belongsToMany(User::class, 'users_perfis', 'fk_perfil','fk_user');
    }
}
