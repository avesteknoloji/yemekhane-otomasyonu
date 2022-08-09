<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonthlyBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monthly_balances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_role_id')->references('user_role_id')
            ->on('users_role')
            ->onDelete('cascade');
            $table->unsignedInteger('monthly_balance');
            $table->unsignedInteger('menu_cost');
            $table->unsignedInteger('available_balance');
            $table->string('operation_type');
            $table->string('payment_id')->nullable(); // ödeme sayfası oluşturulunca ilişkilendirilecek
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
        Schema::dropIfExists('balances');
    }
}
