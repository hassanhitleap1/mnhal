<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePivotTable extends Migration {

	public function up()
	{
		Schema::create('pivot', function(Blueprint $table) {
			$table->increments('pivot_id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('title_ar');
			$table->string('title_en');
			$table->mediumText('description_ar');
			$table->mediumText('description_en');
			$table->integer('school');
			$table->string('pivotnumber');
			$table->integer('domain');
		});
	}

	public function down()
	{
		Schema::drop('pivot');
	}
}