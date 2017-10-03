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
    
    public function perfil() {
        return $this->belongsToMany(Perfil::class, 'perfis_permissoes','fk_permissao','fk_perfil');
    }
}
