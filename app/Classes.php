<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingTrait;
use App\Users;
use App\Levels;


class Classes extends Model {

	protected $table = 'classes';
	public $timestamps = true;
	//protected $fillable=[];

	 //use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

    public function users(){
       return $this->hasMany(Users::class); 
	}
	
	public function level(){
		return $this->hasOne(Levels::class); 
	}
}