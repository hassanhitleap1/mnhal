<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table) {
            $table->increments('userid');
            $table->timestamps();
            $table->softDeletes();
            $table->string('uname')->nullable();
            $table->string('password');
            $table->string('email');
            $table->integer('permession');
            $table->string('token');
            $table->string('fullname');
            $table->boolean('status');
            $table->integer('views_count');
            $table->integer('sales_count');
            $table->string('country');
            $table->string('phone');
            $table->date('birthdate');
            $table->boolean('gender');
            $table->string('activation_code');
            $table->integer('school_id');
            $table->string('user_type');
            $table->integer('class');
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
