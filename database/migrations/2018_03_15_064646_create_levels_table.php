<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLevelsTable extends Migration {

	public function up()
	{
		Schema::create('levels', function(Blueprint $table) {
			$table->increments('level_id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('title_ar');
			$table->string('title_en');
			$table->integer('school');
			$table->integer('level_number');
		});
	}

	public function down()
	{
		Schema::drop('levels');
	}
}