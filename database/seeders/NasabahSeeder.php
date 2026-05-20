<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Nasabah;

class NasabahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Nasabah::truncate();

        Nasabah::create([
            'no_rekening'=>'BS001',
            'nik'=>'3512345678900001',
            'nama'=>'Budi Santoso',
            'alamat'=>'Jl. Merdeka No. 10',
            'no_hp'=>'081234567890',
            'saldo'=>0,
        ]);
        Nasabah::create([
            'no_rekening'=>'BS002',
            'nik'=>'3512345678900002',
            'nama'=>'Siti Aminah',
            'alamat'=>'Jl. Mawar No. 5',
            'no_hp'=>'082345678901',
            'saldo'=>0,
        ]);
    }
}
