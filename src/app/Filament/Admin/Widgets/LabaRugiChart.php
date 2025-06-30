<?php

namespace App\Filament\Admin\Widgets;
use App\Models\FactKeuangan;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class LabaRugiChart extends ChartWidget
{
    protected static ?string $heading = 'Grafik Tren Laba per Bulan';

    protected static ?int $sort = 4; // Atur urutan jika perlu

    protected int | string | array $columnSpan = 'full'; // Agar widget ini memakai lebar penuh

    protected function getData(): array
    {
        // Query untuk mengambil data laba yang dikelompokkan per bulan
        $data = FactKeuangan::query()
            ->join('dim_waktus', 'fact_keuangans.id_waktu', '=', 'dim_waktus.id')
            ->select(
                DB::raw('YEAR(dim_waktus.tanggal) as tahun'),
                DB::raw('MONTH(dim_waktus.tanggal) as bulan'),
                DB::raw('SUM(laba_rugi) as total_laba_rugi'),
                DB::raw('SUM(laba_untung) as total_laba_untung')
            )
            ->groupBy(DB::raw('YEAR(dim_waktus.tanggal)'), DB::raw('MONTH(dim_waktus.tanggal)'))
            ->orderBy('tahun', 'asc')
            ->orderBy('bulan', 'asc')
            ->get();

        // Siapkan label untuk sumbu X (misal: "Jun 2025")
        $labels = $data->map(function ($item) {
            return Carbon::create()->month($item->bulan)->year($item->tahun)->format('M Y');
        });

        return [
            'datasets' => [
                [
                    'label' => 'Laba Untung',
                    'data' => $data->pluck('total_laba_untung')->all(),
                    'backgroundColor' => 'rgba(75, 192, 192, 0.5)',
                    'borderColor' => 'rgb(75, 192, 192)',
                ],
                [
                    'label' => 'Laba / Rugi (Net)',
                    'data' => $data->pluck('total_laba_rugi')->all(),
                    'backgroundColor' => 'rgba(54, 162, 235, 0.5)',
                    'borderColor' => 'rgb(54, 162, 235)',
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
