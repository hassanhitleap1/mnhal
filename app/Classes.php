<?php

namespace classes;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Classes extends Eloquent {

	protected $table = 'classes';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}