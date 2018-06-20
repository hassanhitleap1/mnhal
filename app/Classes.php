<?php

namespace classes;

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use App\Users;

class Classes extends Eloquent {

	protected $table = 'classes';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	public function homeRoomClass(){
        return $this->hasOne(Users::class);
    }
}