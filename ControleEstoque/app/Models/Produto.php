<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {

    protected $fillable = [
        'id',
        'descricao',
        'quantidade',
        'preco_compra',
        'preco_venda'
    ];
    protected $table = 'produtos';
    
    public function entradas()
    {
        return $this->hasMany('App\Models\Entrada');
    }

    public function saidas()
    {
        return $this->hasMany('App\Models\Saida');
    }
    
    public function lucro()
    {
        return (($this->preco_venda / $this->preco_compra) - 1) * 100;
    }
}
