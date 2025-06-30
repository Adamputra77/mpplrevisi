<?php

namespace App\Filament\Admin\Widgets;

use App\Models\FactKeuangan;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class PendapatanPengeluaranChart extends ChartWidget
{
    protected static ?string $heading = 'Pendapatan vs Pengeluaran per Bulan';

    protected static ?int $sort = 2; // Urutan widget di dasbor

    protected int | string | array $columnSpan = 'full'; // Agar widget ini memakai lebar penuh
    
    protected function getData(): array
    {
        $data = FactKeuangan::query()
            ->join('dim_waktus', 'fact_keuangans.id_waktu', '=', 'dim_waktus.id')
            ->select(
                DB::raw('YEAR(dim_waktus.tanggal) as tahun'),
                DB::raw('MONTH(dim_waktus.tanggal) as bulan'),
                DB::raw('SUM(total_pendapatan) as total_pendapatan'),
                DB::raw('SUM(total_pengeluaran) as total_pengeluaran')
            )
            ->groupBy(DB::raw('YEAR(dim_waktus.tanggal)'), DB::raw('MONTH(dim_waktus.tanggal)'))
            ->orderBy('tahun', 'asc')
            ->orderBy('bulan', 'asc')
            ->get();

        $labels = $data->map(function ($item) {
            // Membuat label format "Jan 2024"
            return Carbon::create()->month($item->bulan)->year($item->tahun)->format('M Y');
        });

        return [
            'datasets' => [
                [
                    'label' => 'Total Pendapatan',
                    'data' => $data->pluck('total_pendapatan')->all(),
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'borderColor' => 'rgb(75, 192, 192)',
                ],
                [
                    'label' => 'Total Pengeluaran',
                    'data' => $data->pluck('total_pengeluaran')->all(),
                    'backgroundColor' => 'rgba(255, 99, 132, 0.2)',
                    'borderColor' => 'rgb(255, 99, 132)',
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
