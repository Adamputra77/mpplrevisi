<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FactKeuangan extends Model
{
    protected $table = 'fact_keuangans';
    public $timestamps = false;
    protected $fillable = [
        'id_waktu', 'id_departemen', 'id_akun', 
        'id_proyek', 'id_wilayah', 
        'total_pendapatan', 'total_pengeluaran', 'laba_rugi', 'laba_untung'
    ];
}
