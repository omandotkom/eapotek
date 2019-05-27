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

        return view('input.supplier', ['cabang' => $cabang]);
    }

    /* public function store(Request $request) {
      $data = $request->all();
      $supplier = new Supplier($data);
      $result = $transaction->isValid();
      echo $result;
      } */

    /* public function showSupplierByBranch(Request $request) {
      $supplier = Supplier::where('branch_id', $request->branch_id)
      ->orderBy('nama', 'asc')
      ->get();
      return (string) $supplier;
      } */

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

    public function showSupplierbyBranch($branch_id) {
        if ($branch_id == 0) {
            //default value is all item
            $suppliers = Supplier::with('branch')->simplePaginate(10);
            //$suppliers = DB::table("suppliers")->simplePaginate(10);
            $branches = Branch::all();
            return view('view.supplier', ['suppliers' => $suppliers, 'branches' => $branches, 'branch_id' => $branch_id]);
        } else {
            //means its not default

            $suppliers = Supplier::where('branch_id', $branch_id)->simplePaginate(10);
            $branches = Branch::all();
            return view('view.supplier', ['suppliers' => $suppliers, 'branches' => $branches, 'branch_id' => $branch_id]);
        }
    }

}
