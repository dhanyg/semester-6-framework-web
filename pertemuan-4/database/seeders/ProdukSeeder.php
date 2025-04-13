<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produk')->insert([
            [
                'kode_produk' => 'B001',
                'nama_produk' => 'Filosofi Teras',
                'deskripsi_produk' => 'Sebuah filosofi yang mengajarkan kita untuk hidup dengan bijak dan tenang.',
                'harga' => 81000.00,
                'stok' => 50,
                'status' => true,
                'tanggal_masuk' => now(),
            ],
            [
                'kode_produk' => 'B002',
                'nama_produk' => 'Ikigai - The Japanese Secret to a Long and Happy Life',
                'deskripsi_produk' => 'Buku yang mengungkapkan rahasia hidup bahagia dan panjang umur ala Jepang.',
                'harga' => 120000.00,
                'stok' => 30,
                'status' => true,
                'tanggal_masuk' => now(),
            ],
            [
                'kode_produk' => 'B003',
                'nama_produk' => 'The Art of Loneliness',
                'deskripsi_produk' => 'Buku yang membahas tentang seni menjalani kesendirian dengan bahagia.',
                'harga' => 95000.00,
                'stok' => 35,
                'status' => true,
                'tanggal_masuk' => now(),
            ],
            [
                'kode_produk' => 'B004',
                'nama_produk' => 'What\'s so Wrong about Your Trauma and Expectation',
                'deskripsi_produk' => 'Buku yang membahas tentang trauma dan ekspektasi dalam hidup.',
                'harga' => 78000.00,
                'stok' => 60,
                'status' => true,
                'tanggal_masuk' => now(),
            ],
            [
                'kode_produk' => 'B005',
                'nama_produk' => 'Ihwal Sesat Pikir dan Cacat Logika',
                'deskripsi_produk' => 'Buku yang membahas tentang kesalahan berpikir dan logika dalam kehidupan sehari-hari.',
                'harga' => 61000.00,
                'stok' => 40,
                'status' => true,
                'tanggal_masuk' => now(),
            ],
        ]);
    }
}
