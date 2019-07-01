<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
     protected $table = 'workers';
     public function branch(){
        return $this->hasOne('App\Branch','id','branch_id');
    }
    public function position(){
        return $this->hasOne('App\Position','id','position_id');
    }

    public function attendance(){
        return $this->hasMany('App\Attendance','nik','nik');
    }

}
