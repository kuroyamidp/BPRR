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
        Schema::create('bprs', function (Blueprint $table) {
            $table->id();
            $table->text('nama')->default('Bpr');
            $table->text('judul');
            $table->text('deskripsi');
            $table->date('tanggal');
            $table->text('Gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bprs');
    }
};
