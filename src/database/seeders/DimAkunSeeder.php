<?php

namespace Database\Seeders;

use App\Models\DimAkun;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DimAkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DimAkun::insert([
            ['kode_akun' => '1001', 'nama_akun' => 'Pendapatan Penjualan', 'kategori_akun' => 'Pendapatan'],
            ['kode_akun' => '2001', 'nama_akun' => 'Biaya Operasional', 'kategori_akun' => 'Pengeluaran'],
        ]);
        
    }
}
