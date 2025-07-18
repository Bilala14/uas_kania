<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migration.
     */
    public function up(): void
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id(); // Primary key (id)
            $table->string('kode_kelas')->unique(); // Contoh: "1A", "6B"
            $table->string('nama_kelas'); // Contoh: "Kelas 1A"
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse migration.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};