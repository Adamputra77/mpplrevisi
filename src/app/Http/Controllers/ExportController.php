<?php

namespace App\Http\Controllers;

use App\Models\FactKeuangan;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\FactKeuanganExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function exportPDF()
    {
        $data = FactKeuangan::with([
            'dimWaktu',
            'dimDepartemen',
            'dimAkun',
            'dimProyek',
            'dimWilayah',
        ])->get();

        $pdf = Pdf::loadView('pdf.fact-keuangan', compact('data'))
                  ->setPaper('A4', 'landscape');

        return $pdf->download('laporan_keuangan.pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new FactKeuanganExport, 'laporan_keuangan.xlsx');
    }
}
