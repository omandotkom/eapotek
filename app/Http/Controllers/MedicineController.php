<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;
use App\Supplier;
use Illuminate\Support\Facades\Auth;
class MedicineController extends Controller {

    public function showInputObatView() {
        $cabang = Branch::where('nik', Auth::user()->nik)->first();
        $supplier = Supplier::where('branch_id',$cabang->id)->get(); 
        return view('input.obat', ['cabang' => $cabang,'supplier'=> $supplier]);
    }

}
