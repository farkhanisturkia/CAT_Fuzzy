<?php

namespace Database\Seeders;

use App\Models\Bab;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bab::create([
            'mapel_id'  => 1,
            'nama'      => 'Relasi dan Fungsi'
        ]);

        Bab::create([
            'mapel_id'  => 1,
            'nama'      => 'Persamaan garis lurus'
        ]);

        Bab::create([
            'mapel_id'  => 1,
            'nama'      => 'Sistem persamaan linier 2 variable'
        ]);
    }
}
