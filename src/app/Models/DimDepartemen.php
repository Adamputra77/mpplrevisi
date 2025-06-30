<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DimDepartemen extends Model
{
    protected $table = 'dim_departemens';
    public $timestamps = false;
    protected $fillable = ['nama_departemen'];
}

