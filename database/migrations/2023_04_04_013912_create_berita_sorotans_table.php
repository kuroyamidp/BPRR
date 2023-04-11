<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita_sorotans', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->unsignedBigInteger('kategberita_id');
            $table->json('tag');
            $table->text('banner');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->text('content');
            $table->timestamps();
            $table->foreign('kategberita_id')->references('id')->on('kategori_beritas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berita_sorotans');
    }
};
