<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    public $timestamps = false;
    public function medicine(){
        return $this->hasOne('App\Medicine','id','medicine_id');
    }
}
