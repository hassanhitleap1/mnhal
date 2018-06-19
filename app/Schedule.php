<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model {

	protected $table = 'schedule';
	public $timestamps = true;
	protected $dates = ['deleted_at'];
    protected $primaryKey='schedule_id';
}