<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NoteSupplier extends Model
{
    protected $table = 'note_supplier';
    public $timestamps = false;
    public function supplier(){
        return $this->hasOne('App\Supplier','id','supplier_id');
    }
    public function branch(){
        return $this->hasOne('App\Branch','id','branch_id');
    }
}
