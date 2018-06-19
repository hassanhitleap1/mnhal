<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExamsTable extends Migration {

	public function up()
	{
		Schema::create('exams', function(Blueprint $table) {
			$table->increments('exam_id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('teacher');
			$table->integer('school');
			$table->string('title');
			$table->mediumText('description');
			$table->integer('category');
			$table->integer('level');
			$table->integer('manhal_quizid');
		});
	}

	public function down()
	{
		Schema::drop('exams');
	}
}