<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateScheduleTable extends Migration {

	public function up()
	{
		Schema::create('schedule', function(Blueprint $table) {
			$table->increments('schedule_id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('school');
			$table->integer('class');
			$table->integer('period');
			$table->string('dayofweek');
			$table->integer('teacher');
			$table->integer('category');
		});
	}

	public function down()
	{
		Schema::drop('schedule');
	}
}