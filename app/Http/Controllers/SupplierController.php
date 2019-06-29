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

    public function searchName($branch_id, $namasupplier) {
        if ($branch_id != 0) {
            $suppliers = Supplier::with('branch')->where('nama', 'like', '%' . $namasupplier . '%')->where('branch_id', '=', $branch_id)->simplePaginate(10);
            $branches = Branch::all();
            return view('view.supplier', ['suppliers' => $suppliers, 'branches' => $branches, 'branch_id' => $branch_id]);
        } else {
            $suppliers = Supplier::with('branch')->where('nama', 'like', '%' . $namasupplier . '%')->simplePaginate(10);
            $branches = Branch::all();
            return view('view.supplier', ['suppliers' => $suppliers, 'branches' => $branches, 'branch_id' => $branch_id]);
        }
    }

    public function loadData(Request $request, $branch_id) {
        $cari = $request->q;
        $data = DB::table('suppliers')->where('nama', 'like', '%' . $cari . '%')->where('branch_id', '=', $branch_id)->get();
        return response()->json($data);
    }

    public function update(Request $request){
        $supplier = Supplier::find($request->id);
       
        $supplier->alamat = $request->alamat;
        $supplier->telepon = $request->telepon;
        $supplier->email = $request->email;
        $supplier->save();
        return Response::json([
            'action' => 'update_supplier'
                ], 200); // Status code here
    }
    public function delete(Request $request){
        Supplier::destroy($request->id);
        return Response::json([
            'action' => 'delete_supplier'
                ], 200); // Status code here
   
    }
}
