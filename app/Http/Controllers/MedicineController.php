<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;
use App\Supplier;
use Illuminate\Support\Facades\Auth;
use App\Medicine;
use App\Supplying;

class MedicineController extends Controller {

    public function showInputObatView() {
        $cabang = Branch::where('nik', Auth::user()->nik)->first();
        $supplier = Supplier::where('branch_id', $cabang->id)->get();
        return view('input.obat', ['cabang' => $cabang, 'supplier' => $supplier]);
    }

    public function store(Request $request) {
        $medicine = new Medicine;
        $medicine->id = $request->id;
        $medicine->branch_id = $request->branch_id;
        $medicine->namaobat = $request->namaobat;
        $medicine->satuan = $request->satuan;
        $medicine->stok = $request->stok;
        $medicine->harga = $request->harga;
        $medicine->save();
        $supplying = Supplying::firstOrCreate(['id_supplier' => $request->id_supplier, 'id_medicine' => $request->id_medicine]);
        return response()->json([
                    'status' => 'success',
                    'code' => 'storeMedicine'
        ]);
    }
    public function showAllMedicine(){
        $medicines = Medicine::with('branch')->simplePaginate(10);
        //$suppliers = DB::table("suppliers")->simplePaginate(10);
        $branches = Branch::all();
        return view('view.obat',['medicines' => $medicines,'branches'=>$branches]);
    
    }
    public function byBranchID($branch_id){
        $medicines = Medicine::where('branch_id',$branch_id)->simplePaginate(10);
        return response()->json($medicines,200);
    }
    

}
