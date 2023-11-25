<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Entrada extends Model {

    protected $fillable = [
        'id',
        'idProduto',
        'quantidade',
        'created_at',
        'idUsuario'
    ];

    public $timestamps = false;

    protected $table = 'entrada';
    
    public function produto(): BelongsTo
    {
        return $this->belongsTo(Produto::class, 'idProduto');
    }

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(User::class, 'idUsuario');
    }
}
