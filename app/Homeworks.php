<?php

namespace homeworks;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Homeworks extends Eloquent {

	protected $table = 'homeworks';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}