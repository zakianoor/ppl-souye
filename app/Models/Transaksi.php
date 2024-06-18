<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'transaksi';

    protected $primaryKey = 'id_transaksi';

    protected $fillable = [
        'total_transaksi',
        'tgl_transaksi',
        'norek_buyer',
        'namarek_buyer',
        'bank_buyer',
        'id_user',
        'nama_buyer',
        'alamat_buyer',
        'nohp_buyer',
        'status',
        'order',
        'snap_token'
    ];
}
