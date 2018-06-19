<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDomainsTable extends Migration {

	public function up()
	{
		Schema::create('domains', function(Blueprint $table) {
			$table->increments('domain_id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('title_ar');
			$table->string('title_en');
			$table->mediumText('description_ar');
			$table->mediumText('description_en');
			$table->integer('category');
			$table->string('domainnumber');
			$table->integer('school');
		});
	}

	public function down()
	{
		Schema::drop('domains');
	}
}