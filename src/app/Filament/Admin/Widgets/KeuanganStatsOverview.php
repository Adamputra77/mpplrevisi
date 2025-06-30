<?php

namespace App\Filament\Admin\Widgets;

use App\Models\FactKeuangan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Number;

class KeuanganStatsOverview extends BaseWidget
{
    protected static ?int $sort = 1; // Atur urutan jika perlu
    protected function getStats(): array
    {
        // Ambil total dari tabel fakta
        $totalPendapatan = FactKeuangan::sum('total_pendapatan');
        $totalPengeluaran = FactKeuangan::sum('total_pengeluaran');
        $labaRugi = FactKeuangan::sum('laba_rugi');

        return [
            Stat::make('Total Pendapatan', 'Rp ' . Number::format($totalPendapatan, precision: 2))
                ->description('Seluruh total pendapatan')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
            
            Stat::make('Total Pengeluaran', 'Rp ' . Number::format($totalPengeluaran, precision: 2))
                ->description('Seluruh total pengeluaran')
                ->descriptionIcon('heroicon-m-arrow-trending-down')
                ->color('danger'),
            
            Stat::make('Laba / Rugi', 'Rp ' . Number::format($labaRugi, precision: 2))
                ->description('Selisih pendapatan dan pengeluaran')
                ->descriptionIcon('heroicon-m-scale')
                ->color($labaRugi >= 0 ? 'success' : 'danger'),
        ];
    }
}
