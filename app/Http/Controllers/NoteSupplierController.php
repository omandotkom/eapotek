<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;
use App\NoteSupplier;
use App\Supplier;
use Auth;
use Response;

class NoteSupplierController extends Controller {

    public function showNoteSupplierView() {
        $cabang = Branch::where('nik', Auth::user()->nik)->first();
        $suppliers = Supplier::where('branch_id', $cabang->id)->get();
        return view('input.supplyobat', ['cabang' => $cabang, 'suppliers' => $suppliers]);
    }

    public function store(Request $request) {
        $NoteSupplier = new NoteSupplier;
        $NoteSupplier->supplier_id = $request->supplier_id;
        $NoteSupplier->branch_id = $request->branch_id;
        $NoteSupplier->deskripsi = $request->deskripsi;
        $NoteSupplier->totalbiaya = $request->totalbiaya;
        $NoteSupplier->tanggalSupply = $request->tanggalsupply;
        $NoteSupplier->save();
       return Response::json([
                    'action' => 'save_supplynote'
                        ], 201); // Status code here
    }
    public function showNoteSupplierbyBranch($branch_id){
        if ($branch_id == 0) {
            //default value is all item
            $NoteSuppliers = NoteSupplier::with('branch')->simplePaginate(10);
            //$suppliers = DB::table("suppliers")->simplePaginate(10);
            $branches = Branch::all();
            return view('view.supplyobat', ['notesuppliers' => $NoteSuppliers, 'branches' => $branches, 'branch_id' => $branch_id]);
        } else {
            //means its not default
            $NoteSuppliers = NoteSupplier::where('branch_id', $branch_id)->simplePaginate(10);
            $branches = Branch::all();
            return view('view.supplyobat', ['notesuppliers' => $NoteSuppliers, 'branches' => $branches, 'branch_id' => $branch_id]);
        }
    }

}
