<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Penarikan;
use App\Models\Nasabah;

class PenarikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Penarikan::truncate();

        $nasabah = Nasabah::first();

        if($nasabah) {
            Penarikan::create([
                'nasabah_id' => $nasabah->id,
                'jumlah' => 5000,
                'tanggal' => now()->toDateString(),
            ]);
        }

    }
}
