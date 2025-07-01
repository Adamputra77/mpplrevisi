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

            // 5 data rugi (pengeluaran lebih besar dari pendapatan)
            $rugiData = [
                [80_000_000, 100_000_000],
                [65_000_000, 85_000_000],
                [55_000_000, 70_000_000],
                [40_000_000, 60_000_000],
                [50_000_000, 90_000_000],
            ];

            foreach ($rugiData as [$pendapatan, $pengeluaran]) {
                FactKeuangan::create([
                    'id_waktu' => $idWaktu[array_rand($idWaktu)],
                    'id_departemen' => $idDepartemen[array_rand($idDepartemen)],
                    'id_akun' => $idAkun[array_rand($idAkun)],
                    'id_proyek' => $idProyek[array_rand($idProyek)],
                    'id_wilayah' => $idWilayah[array_rand($idWilayah)],
                    'total_pendapatan' => $pendapatan,
                    'total_pengeluaran' => $pengeluaran,
                    'laba_rugi' => abs($pendapatan - $pengeluaran),
                    'laba_untung' => 0,
                ]);
            }

            // 15 data untung (pendapatan lebih besar dari pengeluaran)
            $untungData = [
                [90_000_000, 60_000_000],
                [100_000_000, 65_000_000],
                [80_000_000, 50_000_000],
                [120_000_000, 80_000_000],
                [85_000_000, 55_000_000],
                [130_000_000, 90_000_000],
                [95_000_000, 65_000_000],
                [115_000_000, 80_000_000],
                [105_000_000, 75_000_000],
                [140_000_000, 100_000_000],
                [90_000_000, 60_000_000],
                [125_000_000, 85_000_000],
                [110_000_000, 70_000_000],
                [135_000_000, 95_000_000],
                [100_000_000, 70_000_000],
            ];

            foreach ($untungData as [$pendapatan, $pengeluaran]) {
                FactKeuangan::create([
                    'id_waktu' => $idWaktu[array_rand($idWaktu)],
                    'id_departemen' => $idDepartemen[array_rand($idDepartemen)],
                    'id_akun' => $idAkun[array_rand($idAkun)],
                    'id_proyek' => $idProyek[array_rand($idProyek)],
                    'id_wilayah' => $idWilayah[array_rand($idWilayah)],
                    'total_pendapatan' => $pendapatan,
                    'total_pengeluaran' => $pengeluaran,
                    'laba_rugi' => 0,
                    'laba_untung' => $pendapatan - $pengeluaran,
                ]);
            }
        }
    }
