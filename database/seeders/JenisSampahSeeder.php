<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JenisSampah;

class JenisSampahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // JenisSampah::truncate();

        JenisSampah::create(['nama'=>'Plastik','harga_per_kg'=>3000]);
        JenisSampah::create(['nama'=>'Kertas','harga_per_kg'=>2000]);
        JenisSampah::create(['nama'=>'Besi','harga_per_kg'=>5000]);
        JenisSampah::create(['nama'=>'Botol Kaca','harga_per_kg'=>4000]);
    }
}
