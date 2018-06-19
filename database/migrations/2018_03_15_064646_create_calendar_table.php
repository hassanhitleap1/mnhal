<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCalendarTable extends Migration {

	public function up()
	{
		Schema::create('calendar', function(Blueprint $table) {
			$table->increments('calendar_id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('user_type');
			$table->integer('user');
			$table->string('activity_type');
			$table->integer('activity_id');
			$table->datetime('start_date');
			$table->datetime('end_date');
			$table->integer('school');
		});
	}

	public function down()
	{
		Schema::drop('calendar');
	}
}