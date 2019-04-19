<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;
use App\Supplier;
use Illuminate\Support\Facades\Auth;
class SupplierController extends Controller
{
    
    public function showInputSupplierView(){
        $cabang = Branch::where('nik',Auth::user()->nik)->first();
        
        return view('input.supplier',['cabang'=>$cabang]);
    }
    public function store(Request $request){
       $data = $request->all();
       $supplier = new Supplier($data);
       $result = $transaction->isValid();
       echo $result;
    }
}
