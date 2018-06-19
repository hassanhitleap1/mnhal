<?php

namespace calendar;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Calendar extends Eloquent {

	protected $table = 'calendar';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}