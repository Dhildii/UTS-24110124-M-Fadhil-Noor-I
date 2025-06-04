<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $barangs = [
            [
                'kode' => 'BJ001',
                'nama' => 'T-Shirt Cotton Combed 30s',
                'harga' => 85000,
                'stok' => 120,
                'deskripsi' => 'Kaos lengan pendek berbahan cotton combed 30s, adem dan nyaman dipakai sehari-hari.'
            ],
            [
                'kode' => 'HD002',
                'nama' => 'Hoodie Zipper Unisex',
                'harga' => 185000,
                'stok' => 40,
                'deskripsi' => 'Hoodie dengan resleting depan, cocok untuk pria dan wanita, tersedia ukuran M hingga XL.'
            ],
            [
                'kode' => 'TP003',
                'nama' => 'Topi Baseball Casual',
                'harga' => 45000,
                'stok' => 75,
                'deskripsi' => 'Topi model baseball berbahan katun, cocok untuk kegiatan outdoor maupun gaya kasual.'
            ],
            [
                'kode' => 'KM004',
                'nama' => 'Kemeja Flanel Pria',
                'harga' => 120000,
                'stok' => 60,
                'deskripsi' => 'Kemeja flanel lengan panjang dengan motif kotak-kotak, bahan halus dan tidak panas.'
            ],
            [
                'kode' => 'BRG005',
                'nama' => 'Tas Selempang Mini',
                'harga' => 99000,
                'stok' => 30,
                'deskripsi' => 'Tas selempang kecil dengan banyak kantong, cocok untuk membawa barang-barang kecil saat bepergian.'
            ]
        ];

        foreach ($barangs as $barang) {
            Barang::create($barang);
        }
    }
}
