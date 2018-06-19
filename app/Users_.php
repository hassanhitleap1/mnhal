<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model {

	protected $table = 'users';
	public $timestamps = true;
	public $primaryKey='userid';
	protected $dates = ['deleted_at'];

}