<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // nama tabel (opsional, hanya jika tabelnya bukan "products")
    // protected $table = 'products';

    /**
     * kolom yang boleh diisi lewat create() / update()
     */
    protected $fillable = [
        'name',
        'price',
        'stock'
    ];
}
