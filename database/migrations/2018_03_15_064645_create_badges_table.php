<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBadgesTable extends Migration {

	public function up()
	{
		Schema::create('badges', function(Blueprint $table) {
			$table->increments('badge_id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('title_ar');
			$table->string('title_en');
			$table->mediumText('description_ar');
			$table->mediumText('description_en');
			$table->integer('category');
			$table->integer('school');
			$table->float('points');
		});
	}

	public function down()
	{
		Schema::drop('badges');
	}
}