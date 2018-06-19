<?php

namespace assigns;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Assigns extends Eloquent {

	protected $table = 'assigns';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}