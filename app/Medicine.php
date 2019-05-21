<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $table = 'medicines';
    public $incrementing = false;
    protected $fillable = ['id','branch_id','namaobat','satuan','harga','stok'];
    public function branch(){
        return $this->hasOne('App\Branch','id','branch_id');
    }
    
}
