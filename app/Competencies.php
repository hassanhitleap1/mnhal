<?php

namespace competencies;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Competencies extends Eloquent {

	protected $table = 'competencies';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}