<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiparisDetayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siparis_detay', function (Blueprint $table) {
            
            $table->increments('id');
            $table->decimal('fiyat',4,2);
            $table->unsignedSmallInteger('adet');
            $table->string('drum',160);
            
            $table->integer('yemek_id')->unsigned();

            $table->foreign('yemek_id')
            ->references('id')
            ->on('yemek')
            ->onDelete('cascade');

            $table->integer('sepet_id')->unsigned();

            $table->foreign('sepet_id')
            ->references('id')
            ->on('sepet')
            ->onDelete('cascade');
            

            $table->softDeletes();  
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
        Schema::dropIfExists('siparis_detay');
    }
}
