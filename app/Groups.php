<?php

namespace groups;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Groups extends Eloquent {

	protected $table = 'groups';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}