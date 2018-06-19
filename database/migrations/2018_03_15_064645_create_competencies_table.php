<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompetenciesTable extends Migration {

	public function up()
	{
		Schema::create('competencies', function(Blueprint $table) {
			$table->increments('compentence_id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('standard');
			$table->string('title_ar');
			$table->string('title_en');
			$table->mediumText('description_ar');
			$table->mediumText('description_en');
			$table->integer('level');
			$table->integer('school');
		});
	}

	public function down()
	{
		Schema::drop('competencies');
	}
}