<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'cart';

    protected $fillable = [
        'nama_brg',
        'harga_brg',
        'qty_brg',
        'img_brg',
        'id_user',
        'id_brg',
        'status',
        'id_transaksi'
    ];
}
