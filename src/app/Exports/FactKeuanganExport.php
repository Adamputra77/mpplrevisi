<?php

namespace App\Exports;

use App\Models\FactKeuangan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FactKeuanganExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return FactKeuangan::with([
            'dimWaktu', 'dimDepartemen', 'dimAkun', 'dimProyek', 'dimWilayah'
        ])->get()->map(function ($row) {
            return [
                'ID' => $row->id,
                'Waktu' => $row->dimWaktu->nama ?? '-',
                'Departemen' => $row->dimDepartemen->nama ?? '-',
                'Akun' => $row->dimAkun->nama ?? '-',
                'Proyek' => $row->dimProyek->nama ?? '-',
                'Wilayah' => $row->dimWilayah->nama ?? '-',
                'Pendapatan' => $row->total_pendapatan,
                'Pengeluaran' => $row->total_pengeluaran,
                'Laba Rugi' => $row->laba_rugi,
                'Laba Untung' => $row->laba_untung,
            ];
        });
    }

    public function headings(): array
    {
        return ['ID', 'Waktu', 'Departemen', 'Akun', 'Proyek', 'Wilayah', 'Pendapatan', 'Pengeluaran', 'Laba Rugi', 'Laba Untung'];
    }
}
