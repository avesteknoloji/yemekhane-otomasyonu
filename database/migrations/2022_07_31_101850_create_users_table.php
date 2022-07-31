<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name',50);
            $table->string('user_pass',50);
            $table->string('user_email',50);
            $table->string('user_role_id');
            $table->softDeletes();  
            $table->timestamps();
        });

        Schema::table('users', function($table) {
            $table->foreign('user_role_id')
            ->references('user_role_id')
            ->on('users_role')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
