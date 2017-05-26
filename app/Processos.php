<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Processos extends Model
{
    protected $table = 'processos';
    protected $primaryKey = "id_processo";
    
    protected $fillable = [
        'data_inicial',
        'data_final',
        'fk_status'
    ];
    
    protected $dates = [
        'data_inicial',
        'data_final'
    ];
}
