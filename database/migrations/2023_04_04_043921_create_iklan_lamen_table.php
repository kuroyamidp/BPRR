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
        Schema::create('iklan_lamen', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->unsignedBigInteger('kategiklan_id');
            $table->text('tag');
            $table->text('banner');
            $table->text('content');
            $table->timestamps();
            $table->foreign('kategiklan_id')->references('id')->on('kategori_iklans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iklan_lamen');
    }
};
