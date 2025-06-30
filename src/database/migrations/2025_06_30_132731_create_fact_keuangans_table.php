<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Type\Decimal;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fact_keuangans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_waktu')->constrained('dim_waktus');
            $table->foreignId('id_departemen')->constrained('dim_departemens');
            $table->foreignId('id_akun')->constrained('dim_akuns');
            $table->foreignId('id_proyek')->constrained('dim_proyeks');
            $table->foreignId('id_wilayah')->constrained('dim_wilayahs');
            $table->decimal('total_pendapatan', 15, 2);
            $table->decimal('total_pengeluaran', 15, 2);
            $table->decimal('laba_rugi', 15, 2);
            $table->decimal('laba_untung', 15, 2);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fact_keuangans');
    }
};
