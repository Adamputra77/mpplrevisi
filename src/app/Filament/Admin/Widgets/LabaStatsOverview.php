<?php

namespace App\Filament\Admin\Widgets;

use App\Models\FactKeuangan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Number;

class LabaStatsOverview extends BaseWidget
{
    protected static ?int $sort = 1; // Atur urutan jika perlu

    protected int | string | array $columnSpan = 'full'; // Agar widget ini memakai lebar penuh

    protected function getStats(): array
    {
        $labaRugi = FactKeuangan::sum('laba_rugi');
        $labaUntung = FactKeuangan::sum('laba_untung');

        return [
            Stat::make('Total Laba Untung', 'Rp ' . Number::format($labaUntung, precision: 2))
                ->description('Akumulasi total laba untung')
                ->descriptionIcon('heroicon-m-arrow-up-right')
                ->color('success'),
            
            Stat::make('Total Laba / Rugi (Net)', 'Rp ' . Number::format($labaRugi, precision: 2))
                ->description('Akumulasi laba bersih (bisa negatif)')
                ->descriptionIcon('heroicon-m-banknotes')
                ->color($labaRugi >= 0 ? 'success' : 'danger'),
        ];
    }
}
