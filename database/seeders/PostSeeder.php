<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'judul_gambar' => 'Love Couple',
                'gambar' => '1.jpeg',
                'deskripsi' => 'Size Canvas 15x15cm dan 20x20cm',
                'harga' => 78000,
                'stok' => '566'
            ],
            [
                'judul_gambar' => 'Faceart',
                'gambar' => '2.jpeg',
                'deskripsi' => 'Size Canvas 30x30cm',
                'harga' => 100000,
                'stok' => '98'
            ],
            [
                'judul_gambar' => 'BTS BT21',
                'gambar' => '3.jpeg',
                'deskripsi' => 'Size Canvas 20x20cm',
                'harga' => 90000,
                'stok' => '6589'
            ],
            [
                'judul_gambar' => 'Faceart Girls',
                'gambar' => '4.jpeg',
                'deskripsi' => 'Size Canvas 15x15cm dan 20x20cm',
                'harga' => 85000,
                'stok' => '900'
            ],
            [
                'judul_gambar' => 'Hallowers',
                'gambar' => '5.jpeg',
                'deskripsi' => 'Size Canvas 20x20cm',
                'harga' => 80000,
                'stok' => '523'
            ],
            [
                'judul_gambar' => 'Barongsai',
                'gambar' => '6.jpeg',
                'deskripsi' => 'Size Canvas 30x30cm',
                'harga' => 70000,
                'stok' => '5352'
            ],
            [
                'judul_gambar' => 'Cat gumush',
                'gambar' => '7.jpeg',
                'deskripsi' => 'Size Canvas 15x15cm dan 20x20cm',
                'harga' => 98000,
                'stok' => '643'
            ],
            [
                'judul_gambar' => 'Home red',
                'gambar' => '8.jpeg',
                'deskripsi' => 'Size Canvas 30x30cm',
                'harga' => 79000,
                'stok' => '87'
            ],
            [
                'judul_gambar' => 'Plant',
                'gambar' => '9.jpeg',
                'deskripsi' => 'Size Canvas 40x40cm',
                'harga' => 150000,
                'stok' => '1233'
            ],
            [
                'judul_gambar' => 'Moon',
                'gambar' => '10.jpeg',
                'deskripsi' => 'Size Canvas 20x20cm',
                'harga' => 99000,
                'stok' => '532'
            ],

        ];
        DB::table('post')->insert ($data);
    }
}
