<?php

namespace App\Models;
use App\models\Traits\Attributes\ProdukAttributes;
use App\models\Traits\Relations\ProdukRelations;

class Produk extends Model{

    use ProdukAttributes, ProdukRelations;

    protected $table = 'Produk';

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}