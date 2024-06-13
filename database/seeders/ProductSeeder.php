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
                'nama_brg' => 'souye retinol moisturizer',
                'harga_brg' => '249000',
                'stok_brg' => 100,
                'img_brg' => 'moist1.jpg',
                'ket_brg' => 'indulge your skin in the transformative power of souye retinol moisturizer. this luxurious moisturizeris formulated with a potent dose of retinol, a scientifically-proven ingredient renowned for its ability to reduce the appearance of fine lines and wrinkle.',
                'id_kategori' => 1
            ],
            [
                'nama_brg' => 'souye tea tree oil',
                'harga_brg' => '299000',
                'stok_brg' => 100,
                'img_brg' => 'oil1.jpg',
                'ket_brg' => 'unleash the power of nature\'s purifying hero with souye tea tree oil. this single-ingredient essential oil packs a punch when it comes to tackling blemishes and promoting a healthy, balanced complexion, can calm redness and irritation, leaving your skin feeling soothed and comfortable.',
                'id_kategori' => 2
            ],
            [
                'nama_brg' => 'souye sleeping eye cover',
                'harga_brg' => '79000',
                'stok_brg' => 100,
                'img_brg' => 'other1.jpg',
                'ket_brg' => 'unwind, recharge, and awaken refreshed with the souye sleeping eye cover. This luxurious sleep mask is meticulously crafted to create the perfect environment for a night of undisturbed slumber, leaving you feeling revitalized and ready to conquer your day.',
                'id_kategori' => 5
            ],
            [
                'nama_brg' => 'souye niacinamide moisturizer',
                'harga_brg' => '249000',
                'stok_brg' => 100,
                'img_brg' => 'moist2.jpg',
                'ket_brg' => 'give your skin a healthy boost with souye niacinamide moisturizer. this lightweight moisturizeris packed with niacinamide, a powerful ingredient known for its anti-inflammatory properties, niacinamide can help soothe redness and irritation, leaving your skin feeling calm and balanced.',
                'id_kategori' => 1
            ],
            [
                'nama_brg' => 'souye hand cream',
                'harga_brg' => '109000',
                'stok_brg' => 100,
                'img_brg' => 'cream1.jpg',
                'ket_brg' => 'dry, cracked hands are a thing of the past with souye hand cream. this luxurious cream delivers a surge of hydration and nourishment, leaving your hands feeling irresistibly soft, smooth, and pampered.',
                'id_kategori' => 3
            ],
            [
                'nama_brg' => 'souye sleeping mask',
                'harga_brg' => '219000',
                'stok_brg' => 100,
                'img_brg' => 'mask1.jpg',
                'ket_brg' => 'indulge your skin in the restorative magic of souye sleeping mask. this luxurious overnight treatment works its wonders while you sleep, leaving you with a visibly renewed and refreshed complexion come morning. this mask helps regulate sebum production, minimizing the appearance of pores and blemishes for a clearer, smoother texture.',
                'id_kategori' => 4
            ],
            [
                'nama_brg' => 'souye hand cream',
                'harga_brg' => '99000',
                'stok_brg' => 100,
                'img_brg' => 'cream2.jpg',
                'ket_brg' => 'dry, cracked hands are a thing of the past with souye hand cream. this luxurious cream delivers a surge of hydration and nourishment, leaving your hands feeling irresistibly soft, smooth, and pampered.',
                'id_kategori' => 3
            ],
            [
                'nama_brg' => 'souye sleeping mask',
                'harga_brg' => '209000',
                'stok_brg' => 100,
                'img_brg' => 'mask1.jpg',
                'ket_brg' => 'indulge your skin in the restorative magic of souye sleeping mask. this luxurious overnight treatment works its wonders while you sleep, leaving you with a visibly renewed and refreshed complexion come morning. this mask helps regulate sebum production, minimizing the appearance of pores and blemishes for a clearer, smoother texture.',
                'id_kategori' => 4
            ],
            [
                'nama_brg' => 'souye gua sha',
                'harga_brg' => '79000',
                'stok_brg' => 100,
                'img_brg' => 'other1.jpg',
                'ket_brg' => 'unveil the secret to a radiant complexion and holistic wellness with souye gua sha. meticulously crafted from high-quality jade, offering you a blend of traditional wisdom and modern luxury.',
                'id_kategori' => 5
            ]
        ]);
    }
}
