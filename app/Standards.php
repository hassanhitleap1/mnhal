<?php

namespace standards;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Standards extends Eloquent {

	protected $table = 'standards';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}