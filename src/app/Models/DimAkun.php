<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DimAkun extends Model
{
    protected $table = 'dim_akuns';
    public $timestamps = false;
    protected $fillable = ['kode_akun', 'nama_akun', 'kategori_akun'];
}

