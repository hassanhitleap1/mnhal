<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClassesTable extends Migration {

	public function up()
	{
		Schema::create('classes', function(Blueprint $table) {
			$table->increments('class_id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('school');
			$table->integer('level');
			$table->string('title_ar');
			$table->string('title_en');
		});
	}

	public function down()
	{
		Schema::drop('classes');
	}
}