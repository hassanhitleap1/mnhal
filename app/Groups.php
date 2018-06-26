<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model {

	protected $table = 'groups';
	public $timestamps = true;

	//use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}