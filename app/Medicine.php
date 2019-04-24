<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $table = 'medicines';
    protected $fillable = ['id','branch_id','supplier_id','namaobat','satuan','harga','stok','updated_at'];
}
