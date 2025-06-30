<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DimProyek extends Model
{
    protected $table = 'dim_proyeks';
    public $timestamps = false;
    protected $fillable = ['nama_proyek', 'tipe_proyek'];
}
