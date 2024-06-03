<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang')->insert([
            [
                'nama_brg' => 'Face Cleanser',
                'harga_brg' => '100000',
                'stok_brg' => 50,
                'img_brg' => 'face_cleanser.jpg',
                'ket_brg' => 'Pembersih wajah untuk semua jenis kulit',
                'id_kategori' => 1
            ],
            [
                'nama_brg' => 'Moisturizer',
                'harga_brg' => '150000',
                'stok_brg' => 40,
                'img_brg' => 'moisturizer.jpg',
                'ket_brg' => 'Pelembap wajah untuk kulit kering',
                'id_kategori' => 2
            ],
            [
                'nama_brg' => 'Sunscreen SPF 50',
                'harga_brg' => '200000',
                'stok_brg' => 30,
                'img_brg' => 'sunscreen.jpg',
                'ket_brg' => 'Tabir surya untuk perlindungan UV maksimal',
                'id_kategori' => 3
            ],
            [
                'nama_brg' => 'Serum Vitamin C',
                'harga_brg' => '250000',
                'stok_brg' => 20,
                'img_brg' => 'serum_vitamin_c.jpg',
                'ket_brg' => 'Serum untuk mencerahkan kulit',
                'id_kategori' => 4
            ],
            [
                'nama_brg' => 'Night Cream',
                'harga_brg' => '300000',
                'stok_brg' => 15,
                'img_brg' => 'night_cream.jpg',
                'ket_brg' => 'Krim malam untuk regenerasi kulit',
                'id_kategori' => 5
            ]
        ]);
    }
}
