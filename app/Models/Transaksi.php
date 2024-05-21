<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'transaksi';

    protected $fillable = [
        'id_transaksi',
        'total_transaksi',
        'tgl_transaksi',
        'norek_buyer',
        'namarek_buyer',
        'bank_buyer',
        'id_user',
        'nama_buyer',
        'alamat_buyer',
        'nohp_buyer',
        'order'
    ];
}
