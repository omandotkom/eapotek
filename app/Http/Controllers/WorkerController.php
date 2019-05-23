<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;
use Illuminate\Support\Facades\Auth;
use App\Worker;
use Response;

class WorkerController extends Controller {

    public function showWorkerView() {
        $cabang = Branch::where('nik', Auth::user()->nik)->first();
        return view('input.karyawan', ['cabang' => $cabang]);
    }

    public function store(Request $request) {
        $worker = new Worker;
        $worker->nik = $request->nik;
        $worker->branch_id = $request->branch_id;
        $worker->position_id = $request->position_id;
        $worker->nama = $request->nama;
        $worker->alamat = $request->alamat;
        $worker->noktp = $request->noktp;
        $worker->save();
        return Response::json([
                    'action' => 'save_worker'
                        ], 201); // Status code here
    }
    public function showAllWorker(){
        $workers = Worker::with('branch','position')->simplePaginate(10);
        //$suppliers = DB::table("suppliers")->simplePaginate(10);
        $branches = Branch::all();
        return view('view.karyawan',['workers' => $workers,'branches'=>$branches]);
    }
    

}
