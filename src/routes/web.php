<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Http\Controllers\ExportController;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/

// Halaman awal
Route::get('/', function () {
    return view('welcome');
});

// Export PDF & Excel Laporan Keuangan
Route::get('/export/fact-keuangan/pdf', [ExportController::class, 'exportPDF']);
Route::get('/export/fact-keuangan/excel', [ExportController::class, 'exportExcel']);
        