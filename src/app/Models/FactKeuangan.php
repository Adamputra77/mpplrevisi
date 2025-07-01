<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FactKeuangan extends Model
{
    protected $table = 'fact_keuangans';
    public $timestamps = false;

    protected $fillable = [
        'id_waktu',
        'id_departemen',
        'id_akun',
        'id_proyek',
        'id_wilayah',
        'total_pendapatan',
        'total_pengeluaran',
        'laba_rugi',
        'laba_untung',
    ];

    // ==============================
    // RELASI KE TABEL DIMENSI
    // ==============================

    public function dimWaktu()
    {
        return $this->belongsTo(DimWaktu::class, 'id_waktu');
    }

    public function dimDepartemen()
    {
        return $this->belongsTo(DimDepartemen::class, 'id_departemen');
    }

    public function dimAkun()
    {
        return $this->belongsTo(DimAkun::class, 'id_akun');
    }

    public function dimProyek()
    {
        return $this->belongsTo(DimProyek::class, 'id_proyek');
    }

    public function dimWilayah()
    {
        return $this->belongsTo(DimWilayah::class, 'id_wilayah');
    }
}
