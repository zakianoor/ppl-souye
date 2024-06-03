<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategori')->insert([
            [
                'nama_kategori' => 'Pembersih Wajah',  // untuk Face Cleanser
            ],
            [
                'nama_kategori' => 'Pelembap',  // untuk Moisturizer
            ],
            [
                'nama_kategori' => 'Tabir Surya',  // untuk Sunscreen SPF 50
            ],
            [
                'nama_kategori' => 'Serum',  // untuk Serum Vitamin C
            ],
            [
                'nama_kategori' => 'Krim Malam',  // untuk Night Cream
            ]
        ]);
    }
}
