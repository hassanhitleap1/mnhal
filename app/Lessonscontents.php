<?php

namespace lessonscontents;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Lessonscontents extends Eloquent {

	protected $table = 'lessonscontents';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}