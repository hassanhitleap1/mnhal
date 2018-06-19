<?php

namespace domains;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Domains extends Eloquent {

	protected $table = 'domains';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}