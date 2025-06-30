<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dim_waktus', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('bulan');
            $table->string('kuartal');
            $table->integer('tahun');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dim_waktus');
    }
};
