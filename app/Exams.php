<?php

namespace exams;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Exams extends Eloquent {

	protected $table = 'exams';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}