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
        return $this->belongsTo(Levels::class);
    }
    public function homeRoomClass(){
        return $this->belongsTo(Classes::class);
    }
}
