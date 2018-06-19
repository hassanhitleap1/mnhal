<?php

namespace pivot;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Pivot extends Eloquent {

	protected $table = 'pivot';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}