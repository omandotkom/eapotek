<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;
use App\Supplier;
use Illuminate\Support\Facades\Auth;
use App\Medicine;
use App\Supplying;
use DB;
use Response;
class MedicineController extends Controller {

    public function showInputObatView() {
        $cabang = Branch::where('nik', Auth::user()->nik)->first();
        $supplier = Supplier::where('branch_id', $cabang->id)->get();
        $medicine = Medicine::where('branch_id', $cabang->id)->get();
        return view('input.obat', ['cabang' => $cabang, 'supplier' => $supplier,'medicine'=>$medicine]);
    }
    public function detil($id){
        $medicine = Medicine::with('supplying')->where('id',$id)->first();
        return $medicine->toJson();
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

    public function showSupplierbyBranch($branch_id) {
        if ($branch_id == 0) {
            //default value is all item
            $medicines = Medicine::with('branch')->simplePaginate(10);
            //$suppliers = DB::table("suppliers")->simplePaginate(10);
            $branches = Branch::all();
            return view('view.obat', ['medicines' => $medicines, 'branches' => $branches, 'branch_id' => $branch_id]);
        } else {
            //means its not default

            $medicines = Medicine::where('branch_id', $branch_id)->simplePaginate(10);
            $branches = Branch::all();
            return view('view.obat', ['medicines' => $medicines, 'branches' => $branches, 'branch_id' => $branch_id]);
        }
    }

    public function loadData(Request $request, $branch_id) {
        $cari = $request->q;
        $data = DB::table('medicines')->where('namaobat', 'like', '%' . $cari . '%')->where('branch_id', '=', $branch_id)->get();
        return response()->json($data);
    }
    
    public function update(Request $request){
        $medicine = Medicine::find($request->id);
       
        $medicine->namaobat = $request->namaobat;
        $medicine->satuan = $request->satuan;
        $medicine->harga = $request->harga;
        $medicine->stok = $request->stok;
        
        $medicine->save();
        return Response::json([
            'action' => 'update_medicine'
                ], 200); // Status code here
   
    }
    public function searchName($branch_id, $namaobat) {
        if ($branch_id != 0) {
            $medicines = Medicine::with('branch')->where('namaobat', 'like', '%' . $namaobat . '%')->where('branch_id', '=', $branch_id)->simplePaginate(10);
            $branches = Branch::all();
            return view('view.obat', ['medicines' => $medicines, 'branches' => $branches, 'branch_id' => $branch_id]);
        } else {
            $medicines = Medicine::with('branch')->where('namaobat', 'like', '%' . $namaobat . '%')->simplePaginate(10);
            $branches = Branch::all();
            return view('view.obat', ['medicines' => $medicines, 'branches' => $branches, 'branch_id' => $branch_id]);
        }
    }
    public function showById($id){
        $cabang = Branch::where('nik', Auth::user()->nik)->first();
        $supplier = Supplier::where('branch_id', $cabang->id)->get();
        
        $medicine = Medicine::findOrFail($id);
        return view('input.obat', ['edit' => true,'cabang' => $cabang, 'supplier' => $supplier,'medicine'=>$medicine]);
    }
    public function branch($branch_id){
        $medicines = Medicine::where('branch_id',$branch_id)->simplePaginate(10);
        $branches = Branch::all();
        return view('view.obat', ['medicines' => $medicines, 'branches' => $branches, 'branch_id' => $branch_id]);
    }
}
