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
                'nama_kategori' => 'moisturizer',  // untuk moisturizer
            ],
            [
                'nama_kategori' => 'serum',  // untuk serum
            ],
            [
                'nama_kategori' => 'cream',  // untuk cream
            ],
            [
                'nama_kategori' => 'mask',  // untuk mask
            ],
            [
                'nama_kategori' => 'other',  // untuk other
            ]
        ]);
    }
}
