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

}
