<?php

namespace Database\Seeders;

use App\Models\DimDepartemen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DimDepartemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DimDepartemen::insert([
            ['nama_departemen' => 'Keuangan'],
            ['nama_departemen' => 'Pemasaran'],
            ['nama_departemen' => 'Operasional'],
        ]);
        
    }
}
