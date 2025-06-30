<?php

namespace App\Filament\Admin\Widgets;

use App\Models\FactKeuangan;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class TransaksiKeuanganTerbaru extends BaseWidget
{
    protected static ?int $sort = 1;

    protected int | string | array $columnSpan = 'full'; // Agar widget ini memakai lebar penuh

    public function table(Table $table): Table
    {
        return $table
            ->query(
                // Mengambil 10 data terbaru berdasarkan tanggal
                FactKeuangan::query()
                    ->join('dim_waktus', 'fact_keuangans.id_waktu', '=', 'dim_waktus.id')
                    ->select('fact_keuangans.*') // Pastikan memilih semua kolom dari fact_keuangans
            )
            ->defaultSort('dim_waktus.tanggal', 'desc') // Urutkan berdasarkan tanggal terbaru
            ->columns([
                Tables\Columns\TextColumn::make('dimWaktu.tanggal')
                    ->label('Tanggal')
                    ->date('d M Y')
                    ->sortable('dim_waktus.tanggal'),
                
                Tables\Columns\TextColumn::make('dimDepartemen.nama_departemen')
                    ->label('Departemen')
                    ->searchable(),

                Tables\Columns\TextColumn::make('dimProyek.nama_proyek')
                    ->label('Proyek')
                    ->searchable(),

                Tables\Columns\TextColumn::make('dimAkun.nama_akun')
                    ->label('Akun')
                    ->searchable(),

                Tables\Columns\TextColumn::make('total_pendapatan')
                    ->label('Pendapatan')
                    ->money('IDR')
                    ->sortable(),

                Tables\Columns\TextColumn::make('total_pengeluaran')
                    ->label('Pengeluaran')
                    ->money('IDR')
                    ->sortable(),
            ]);
    }
}
