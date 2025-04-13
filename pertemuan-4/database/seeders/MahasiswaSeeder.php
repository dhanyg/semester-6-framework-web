<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ['Andi', 'Budi', 'Citra', 'Dewi', 'Eko'];
        for ($i = 0; $i < 5; $i++) {
            DB::table('mahasiswa')->insert([
                'nim' => rand(100000000, 999999999),
                'nama_mahasiswa' => $names[$i],
                'email' => $names[$i] . '@students.utdi.ac.id',
                'jenis_kelamin' => rand(0, 1) ? 'L' : 'P',
                'tanggal_lahir' => now()->subYears(rand(18, 25))->toDateString(),
                'angkatan' => rand(2018, 2025),
                'ipk' => round(rand(200, 400) / 100, 2),
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
