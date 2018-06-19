<?php

namespace lessons;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Lessons extends Eloquent {

	protected $table = 'lessons';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}