<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnualBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annual_balances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_role_id')->references('user_role_id')
            ->on('users_role')
            ->onDelete('cascade');
            $table->unsignedInteger('annual_balance');
            $table->string('operation_type');
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
        Schema::dropIfExists('annual_balances');
    }
}
