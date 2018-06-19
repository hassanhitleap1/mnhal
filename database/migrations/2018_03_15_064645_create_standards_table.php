<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStandardsTable extends Migration {

	public function up()
	{
		Schema::create('standards', function(Blueprint $table) {
			$table->increments('standard_id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('title_ar');
			$table->string('title_en');
			$table->mediumText('description_ar');
			$table->mediumText('description_en');
			$table->string('standard_number');
			$table->integer('category');
			$table->integer('school');
			$table->integer('pivot');
		});
	}

	public function down()
	{
		Schema::drop('standards');
	}
}