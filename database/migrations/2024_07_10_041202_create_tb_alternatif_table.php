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
        Schema::create('tb_alternatif', function (Blueprint $table) {
            $table->id();
            $table->string('id_alternatif', 10)->unique(); // Kolom id_alternatif dengan batasan unik
            $table->string('nama_alternatif');
            $table->timestamps(); // Kolom untuk created_at dan updated_at
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_alternatif');
    }
};