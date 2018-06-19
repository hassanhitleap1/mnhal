<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLessonscontentsTable extends Migration {

	public function up()
	{
		Schema::create('lessonscontents', function(Blueprint $table) {
			$table->increments('lessonscontetn_id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('lesson');
			$table->string('type');
			$table->integer('manhal_productid');
			$table->string('title');
			$table->mediumText('description');
			$table->float('points');
		});
	}

	public function down()
	{
		Schema::drop('lessonscontents');
	}
}