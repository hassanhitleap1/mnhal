<?php

namespace progress;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Progress extends Eloquent {

	protected $table = 'progress';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}