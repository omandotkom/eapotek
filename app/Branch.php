<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = 'branches';
    public function suppliers(){
        return $this->hasMany('Supplier');
    }
    public function medicines(){
        return $this->hasMany('Medicine');
    }
    public function positions(){
        return $this->hasMany('App\Position','branch_id','id');
    }
}
