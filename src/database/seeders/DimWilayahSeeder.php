<?php

namespace Database\Seeders;

use App\Models\DimWilayah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DimWilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DimWilayah::insert([
            ['nama_wilayah' => 'Jawa Barat', 'kota' => 'Bandung', 'negara' => 'Indonesia'],
            ['nama_wilayah' => 'DKI Jakarta', 'kota' => 'Jakarta', 'negara' => 'Indonesia'],
        ]);
        
    }
}
