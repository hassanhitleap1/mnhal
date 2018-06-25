<?php

namespace App;
use App\Users;
use App\Classes;

use Illuminate\Database\Eloquent\Model;

class Levels extends Model {

	protected $table = 'levels';

    protected $primaryKey='level_id';
    public $timestamps = true;

    public function users(){
        return $this->hasMany(Users::class);
    }

    public function classes(){
        return $this->belongsTo(Classes::class);
    }


}