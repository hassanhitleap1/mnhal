<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProgressTable extends Migration {

	public function up()
	{
		Schema::create('progress', function(Blueprint $table) {
			$table->increments('progress_id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('student');
			$table->integer('school');
			$table->string('type');
			$table->integer('ref_id');
			$table->float('min_point');
			$table->float('max_point');
			$table->float('points');
			$table->float('percent');
		});
	}

	public function down()
	{
		Schema::drop('progress');
	}
}