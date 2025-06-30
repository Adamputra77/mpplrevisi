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
        $startDate = '2024-06-01';
        $monthsToGenerate = 20;

        for ($i = 0; $i < $monthsToGenerate; $i++) {
            $date = date_create($startDate);
            date_add($date, date_interval_create_from_date_string("$i months"));

            DimWaktu::create([
            'tanggal' => date_format($date, 'Y-m-d'),
            'bulan' => date_format($date, 'F'),
            'kuartal' => 'Q' . ceil(date_format($date, 'n') / 3),
            'tahun' => date_format($date, 'Y'),
            ]);
        }


    }
}
