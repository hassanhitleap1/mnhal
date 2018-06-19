<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHomeworksTable extends Migration {

	public function up()
	{
		Schema::create('homeworks', function(Blueprint $table) {
			$table->increments('homework_id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('title');
			$table->mediumText('description');
			$table->integer('category');
			$table->integer('school');
			$table->integer('teacher');
			$table->integer('productid');
			$table->string('product_type');
		});
	}

	public function down()
	{
		Schema::drop('homeworks');
	}
}