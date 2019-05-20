<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;
use App\Supplier;
use Illuminate\Support\Facades\Auth;
use Response;
use DB;
class SupplierController extends Controller {

    public function showInputSupplierView() {
        $cabang = Branch::where('nik', Auth::user()->nik)->first();
       
    }

    /* public function store(Request $request) {
      $data = $request->all();
      $supplier = new Supplier($data);
      $result = $transaction->isValid();
      echo $result;
      } */

    public function showSupplierByBranch(Request $request) {
        $supplier = Supplier::where('branch_id', $request->branch_id)
                ->orderBy('nama', 'asc')
                ->get();
        return (string) $supplier;
    }

    public function store(Request $request) {
        $supplier = new Supplier;
        $supplier->branch_id = $request->branch_id;
        $supplier->nama = $request->nama;
        $supplier->alamat = $request->alamat;
        $supplier->telepon = $request->telepon;
        $supplier->email = $request->email;
        $supplier->save();
        return Response::json([
                    'action' => 'save_supplier'
                        ], 201); // Status code here
    }
    
    public function showAllSupplier(){
        $suppliers = Supplier::with('branch')->simplePaginate(10);
        //$suppliers = DB::table("suppliers")->simplePaginate(10);
        $branch = Branch::all();
        return view('view.supplier',['suppliers' => $suppliers,'branches'=>$branch]);
    }
    
}