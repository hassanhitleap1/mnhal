<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAssignsTable extends Migration {

	public function up()
	{
		Schema::create('assigns', function(Blueprint $table) {
			$table->increments('assign_id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('product_id');
			$table->integer('ref_id');
			$table->string('product_type');
			$table->string('ref_type');
			$table->integer('school');
		});
	}

	public function down()
	{
		Schema::drop('assigns');
	}
}