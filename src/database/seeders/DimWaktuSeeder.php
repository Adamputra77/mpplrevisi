<?php

namespace Database\Seeders;

use App\Models\DimAkun;
use App\Models\DimWaktu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DimWaktuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DimWaktu::create([
            'tanggal' => '2024-06-30',
            'bulan' => 'Juni',
            'kuartal' => 'Q2',
            'tahun' => 2024,
        ]);


    }
}
