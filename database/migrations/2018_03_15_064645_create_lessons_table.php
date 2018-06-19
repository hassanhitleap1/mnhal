<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLessonsTable extends Migration {

	public function up()
	{
		Schema::create('lessons', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('title');
			$table->mediumText('description');
			$table->integer('level');
			$table->integer('school');
			$table->integer('teacher');
			$table->float('min_point');
			$table->float('max_point');
			$table->integer('category');
			$table->datetime('start_date');
			$table->datetime('close_date');
		});
	}

	public function down()
	{
		Schema::drop('lessons');
	}
}