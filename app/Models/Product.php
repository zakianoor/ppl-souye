<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $primaryKey = 'id_brg';

    protected $fillable = [
        'nama_brg',
        'harga_brg',
        'stok_brg',
        'img_brg',
        'ket_brg',
        'id_kategori'
    ];
}
