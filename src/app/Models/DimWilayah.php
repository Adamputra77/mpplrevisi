<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DimWilayah extends Model
{
    protected $table = 'dim_wilayahs';
    public $timestamps = false;
    protected $fillable = ['nama_wilayah', 'kota', 'negara'];
}
