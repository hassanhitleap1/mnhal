<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('categories', function(Blueprint $table) {
			$table->increments('category_id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('title_ar');
			$table->string('title_en');
			$table->integer('order');
		});
	}

	public function down()
	{
		Schema::drop('categories');
	}
}