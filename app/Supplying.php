<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplying extends Model
{
    protected $table = 'supplying';
    protected $fillable = ['id_supplier','id_medicine'];
    public $timestamps = false;
}
