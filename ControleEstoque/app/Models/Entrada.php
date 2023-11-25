<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model {

    protected $fillable = [
        'id',
        'idProduto',
        'quantidade',
        'data',
        'idUsuario'
    ];

    public $timestamps = false;

    protected $table = 'entrada';
    
    public function produtos()
    {
        return $this->belongsTo('App\Models\Produto');
    }
    
}
