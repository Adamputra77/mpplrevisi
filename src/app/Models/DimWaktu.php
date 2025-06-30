<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DimWaktu extends Model
{
    protected $table = 'dim_waktus';
    public $timestamps = false;
    protected $fillable = ['tanggal', 'bulan', 'kuartal', 'tahun'];
}

