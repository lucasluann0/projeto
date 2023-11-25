<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produto extends Model {

    protected $fillable = [
        'id',
        'descricao',
        'quantidade',
        'preco_compra',
        'preco_venda'
    ];
    protected $table = 'produtos';

    public function entradas(): HasMany
    {
        return $this->hasMany(Entrada::class, 'idProduto');
    }

    public function saidas(): HasMany
    {
        return $this->hasMany(Saida::class, 'idProduto');
    }
    
    public function lucro()
    {
        return (($this->preco_venda / $this->preco_compra) - 1) * 100;
    }
}
