<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';
    protected $fillable = ['branch_id','nama','alamat','telepon','email'];
    public function branch(){
        return $this->hasOne('App\Branch','id','branch_id');
    }
}
