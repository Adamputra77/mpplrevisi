<?php

namespace Database\Seeders;

use App\Models\FactKeuangan;
use Illuminate\Database\Seeder;
use App\Models\DimWaktu;
use App\Models\DimDepartemen;
use App\Models\DimAkun;
use App\Models\DimProyek;
use App\Models\DimWilayah;

class FactKeuanganSeeder extends Seeder
{
    public function run(): void
    {
        $idWaktu = DimWaktu::pluck('id')->toArray();
        $idDepartemen = DimDepartemen::pluck('id')->toArray();
        $idAkun = DimAkun::pluck('id')->toArray();
        $idProyek = DimProyek::pluck('id')->toArray();
        $idWilayah = DimWilayah::pluck('id')->toArray();

        // 5 data laba_rugi (pengeluaran lebih besar dari pendapatan, laba_rugi tetap positif)
        FactKeuangan::create([
            'id_waktu' => $idWaktu[array_rand($idWaktu)],
            'id_departemen' => $idDepartemen[array_rand($idDepartemen)],
            'id_akun' => $idAkun[array_rand($idAkun)],
            'id_proyek' => $idProyek[array_rand($idProyek)],
            'id_wilayah' => $idWilayah[array_rand($idWilayah)],
            'total_pendapatan' => 80_000_000,
            'total_pengeluaran' => 100_000_000,
            'laba_rugi' => abs(80_000_000 - 100_000_000),
            'laba_untung' => 0,
        ]);

        FactKeuangan::create([
            'id_waktu' => $idWaktu[array_rand($idWaktu)],
            'id_departemen' => $idDepartemen[array_rand($idDepartemen)],
            'id_akun' => $idAkun[array_rand($idAkun)],
            'id_proyek' => $idProyek[array_rand($idProyek)],
            'id_wilayah' => $idWilayah[array_rand($idWilayah)],
            'total_pendapatan' => 65_000_000,
            'total_pengeluaran' => 85_000_000,
            'laba_rugi' => abs(65_000_000 - 85_000_000),
            'laba_untung' => 0,
        ]);

        FactKeuangan::create([
            'id_waktu' => $idWaktu[array_rand($idWaktu)],
            'id_departemen' => $idDepartemen[array_rand($idDepartemen)],
            'id_akun' => $idAkun[array_rand($idAkun)],
            'id_proyek' => $idProyek[array_rand($idProyek)],
            'id_wilayah' => $idWilayah[array_rand($idWilayah)],
            'total_pendapatan' => 55_000_000,
            'total_pengeluaran' => 70_000_000,
            'laba_rugi' => abs(55_000_000 - 70_000_000),
            'laba_untung' => 0,
        ]);

        FactKeuangan::create([
            'id_waktu' => $idWaktu[array_rand($idWaktu)],
            'id_departemen' => $idDepartemen[array_rand($idDepartemen)],
            'id_akun' => $idAkun[array_rand($idAkun)],
            'id_proyek' => $idProyek[array_rand($idProyek)],
            'id_wilayah' => $idWilayah[array_rand($idWilayah)],
            'total_pendapatan' => 40_000_000,
            'total_pengeluaran' => 60_000_000,
            'laba_rugi' => abs(40_000_000 - 60_000_000),
            'laba_untung' => 0,
        ]);

        FactKeuangan::create([
            'id_waktu' => $idWaktu[array_rand($idWaktu)],
            'id_departemen' => $idDepartemen[array_rand($idDepartemen)],
            'id_akun' => $idAkun[array_rand($idAkun)],
            'id_proyek' => $idProyek[array_rand($idProyek)],
            'id_wilayah' => $idWilayah[array_rand($idWilayah)],
            'total_pendapatan' => 50_000_000,
            'total_pengeluaran' => 90_000_000,
            'laba_rugi' => abs(50_000_000 - 90_000_000),
            'laba_untung' => 0,
        ]);


        // 15 data laba_untung (positif, laba_untung = pendapatan - pengeluaran)
        FactKeuangan::create([
            'id_waktu' => $idWaktu[array_rand($idWaktu)],
            'id_departemen' => $idDepartemen[array_rand($idDepartemen)],
            'id_akun' => $idAkun[array_rand($idAkun)],
            'id_proyek' => $idProyek[array_rand($idProyek)],
            'id_wilayah' => $idWilayah[array_rand($idWilayah)],
            'total_pendapatan' => 90_000_000,
            'total_pengeluaran' => 60_000_000,
            'laba_rugi' => 0,
            'laba_untung' => 30_000_000,
        ]);

        FactKeuangan::create([
            'id_waktu' => $idWaktu[array_rand($idWaktu)],
            'id_departemen' => $idDepartemen[array_rand($idDepartemen)],
            'id_akun' => $idAkun[array_rand($idAkun)],
            'id_proyek' => $idProyek[array_rand($idProyek)],
            'id_wilayah' => $idWilayah[array_rand($idWilayah)],
            'total_pendapatan' => 100_000_000,
            'total_pengeluaran' => 65_000_000,
            'laba_rugi' => 0,
            'laba_untung' => 35_000_000,
        ]);

        FactKeuangan::create([
            'id_waktu' => $idWaktu[array_rand($idWaktu)],
            'id_departemen' => $idDepartemen[array_rand($idDepartemen)],
            'id_akun' => $idAkun[array_rand($idAkun)],
            'id_proyek' => $idProyek[array_rand($idProyek)],
            'id_wilayah' => $idWilayah[array_rand($idWilayah)],
            'total_pendapatan' => 80_000_000,
            'total_pengeluaran' => 50_000_000,
            'laba_rugi' => 0,
            'laba_untung' => 30_000_000,
        ]);

        FactKeuangan::create([
            'id_waktu' => $idWaktu[array_rand($idWaktu)],
            'id_departemen' => $idDepartemen[array_rand($idDepartemen)],
            'id_akun' => $idAkun[array_rand($idAkun)],
            'id_proyek' => $idProyek[array_rand($idProyek)],
            'id_wilayah' => $idWilayah[array_rand($idWilayah)],
            'total_pendapatan' => 120_000_000,
            'total_pengeluaran' => 80_000_000,
            'laba_rugi' => 0,
            'laba_untung' => 40_000_000,
        ]);

        FactKeuangan::create([
            'id_waktu' => $idWaktu[array_rand($idWaktu)],
            'id_departemen' => $idDepartemen[array_rand($idDepartemen)],
            'id_akun' => $idAkun[array_rand($idAkun)],
            'id_proyek' => $idProyek[array_rand($idProyek)],
            'id_wilayah' => $idWilayah[array_rand($idWilayah)],
            'total_pendapatan' => 85_000_000,
            'total_pengeluaran' => 55_000_000,
            'laba_rugi' => 0,
            'laba_untung' => 30_000_000,
        ]);

        FactKeuangan::create([
            'id_waktu' => $idWaktu[array_rand($idWaktu)],
            'id_departemen' => $idDepartemen[array_rand($idDepartemen)],
            'id_akun' => $idAkun[array_rand($idAkun)],
            'id_proyek' => $idProyek[array_rand($idProyek)],
            'id_wilayah' => $idWilayah[array_rand($idWilayah)],
            'total_pendapatan' => 130_000_000,
            'total_pengeluaran' => 90_000_000,
            'laba_rugi' => 0,
            'laba_untung' => 40_000_000,
        ]);

        FactKeuangan::create([
            'id_waktu' => $idWaktu[array_rand($idWaktu)],
            'id_departemen' => $idDepartemen[array_rand($idDepartemen)],
            'id_akun' => $idAkun[array_rand($idAkun)],
            'id_proyek' => $idProyek[array_rand($idProyek)],
            'id_wilayah' => $idWilayah[array_rand($idWilayah)],
            'total_pendapatan' => 95_000_000,
            'total_pengeluaran' => 65_000_000,
            'laba_rugi' => 0,
            'laba_untung' => 30_000_000,
        ]);

        FactKeuangan::create([
            'id_waktu' => $idWaktu[array_rand($idWaktu)],
            'id_departemen' => $idDepartemen[array_rand($idDepartemen)],
            'id_akun' => $idAkun[array_rand($idAkun)],
            'id_proyek' => $idProyek[array_rand($idProyek)],
            'id_wilayah' => $idWilayah[array_rand($idWilayah)],
            'total_pendapatan' => 115_000_000,
            'total_pengeluaran' => 80_000_000,
            'laba_rugi' => 0,
            'laba_untung' => 35_000_000,
        ]);

        FactKeuangan::create([
            'id_waktu' => $idWaktu[array_rand($idWaktu)],
            'id_departemen' => $idDepartemen[array_rand($idDepartemen)],
            'id_akun' => $idAkun[array_rand($idAkun)],
            'id_proyek' => $idProyek[array_rand($idProyek)],
            'id_wilayah' => $idWilayah[array_rand($idWilayah)],
            'total_pendapatan' => 105_000_000,
            'total_pengeluaran' => 75_000_000,
            'laba_rugi' => 0,
            'laba_untung' => 30_000_000,
        ]);

        FactKeuangan::create([
            'id_waktu' => $idWaktu[array_rand($idWaktu)],
            'id_departemen' => $idDepartemen[array_rand($idDepartemen)],
            'id_akun' => $idAkun[array_rand($idAkun)],
            'id_proyek' => $idProyek[array_rand($idProyek)],
            'id_wilayah' => $idWilayah[array_rand($idWilayah)],
            'total_pendapatan' => 140_000_000,
            'total_pengeluaran' => 100_000_000,
            'laba_rugi' => 0,
            'laba_untung' => 40_000_000,
        ]);
    }
}
