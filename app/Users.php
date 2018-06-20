<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Levels;
use App\Classes;

class Users extends Model
{
    //
    protected $table = 'users';
    protected $primaryKey='userid';

    public function homeRoomLevel(){
        return $this->hasOne(Levels::class);
    }
    public function homeRoomClass(){
        return $this->hasOne(Classes::class);
    }
}
