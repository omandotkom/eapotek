<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = 'branches';
    public function suppliers(){
        return $this->hasMany('Supplier');
    }
}
