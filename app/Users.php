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
    const USER_MANHAL_ADMINISTRATOR=1;
    const USER_SCHOOL_MANGER=2;
    const USER_SCHOOL_ADMINISTRATOR=3;
    const USER_TEACHER=4;
    const USER_STUDENT=5;
    const USER_PARENT=6;

  
    
     public function  level(){
        return $this->belongsTo(Levels::class);
    }
    
    public function  classes(){
        return $this->belongsTo(Classes::class);
    }
}
