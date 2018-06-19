<?php

namespace badges;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Badges extends Eloquent {

	protected $table = 'badges';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}