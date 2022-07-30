<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYemekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yemek', function (Blueprint $table) {
            $table->increments('id');

            $table->string('slug',160);
            $table->string('yemek_ad',160);
            $table->decimal('yemek_fiyat',4,2);
            $table->unsignedSmallInteger('stok');
            $table->integer('yemek_kategori_id')->unsigned();

            $table->foreign('yemek_kategori_id')
            ->references('id')
            ->on('yemek')
            ->onDelete('cascade');
            


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
        Schema::dropIfExists('yemek');
    }
}
