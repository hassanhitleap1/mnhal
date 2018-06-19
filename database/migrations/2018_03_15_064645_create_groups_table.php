<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGroupsTable extends Migration {

	public function up()
	{
		Schema::create('groups', function(Blueprint $table) {
			$table->increments('group_id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('school');
			$table->string('title_ar');
			$table->string('title_en');
			$table->mediumText('description_ar');
			$table->mediumText('description_en');
		});
	}

	public function down()
	{
		Schema::drop('groups');
	}
}