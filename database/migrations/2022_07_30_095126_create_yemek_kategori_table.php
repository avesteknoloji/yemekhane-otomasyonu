<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYemekKategoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yemek_kategori', function (Blueprint $table) {
            $table->increments('id');
            $table->string('yemek_kategori_ad',150);
            $table->unsignedSmallInteger('yemek_kategori_ust');
            $table->unsignedSmallInteger('yemek_kategori_sira');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yemek_kategori');
    }
}
