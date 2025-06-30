<?php

namespace Database\Seeders;

use App\Models\DimProyek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DimProyekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DimProyek::insert([
            ['nama_proyek' => 'Proyek A', 'tipe_proyek' => 'Internal'],
            ['nama_proyek' => 'Proyek B', 'tipe_proyek' => 'Eksternal'],
        ]);
        
    }
}
