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
    
      public function showWorkerbyBranch($branch_id){
        if ($branch_id == 0) {
            //default value is all item
            $workers = Worker::with('branch')->simplePaginate(10);
            //$suppliers = DB::table("suppliers")->simplePaginate(10);
            $branches = Branch::all();
            return view('view.karyawan', ['workers' => $workers, 'branches' => $branches, 'branch_id' => $branch_id]);
        } else {
            //means its not default

            $workers = Worker::where('branch_id', $branch_id)->simplePaginate(10);
            $branches = Branch::all();
            return view('view.karyawan', ['workers' => $workers, 'branches' => $branches, 'branch_id' => $branch_id]);
        }
    }
    
    public function searchName($branch_id, $namaworker) {
        if ($branch_id != 0) {
            $workers = Worker::with('branch')->where('nama', 'like', '%' . $namaworker . '%')->where('branch_id', '=', $branch_id)->simplePaginate(10);
            $branches = Branch::all();
            return view('view.karyawan', ['workers' => $workers, 'branches' => $branches, 'branch_id' => $branch_id]);
        } else {
            $workers = Worker::with('branch')->where('nama', 'like', '%' . $namaworker . '%')->simplePaginate(10);
            $branches = Branch::all();
            return view('view.karyawan', ['workers' => $workers, 'branches' => $branches, 'branch_id' => $branch_id]);
        }
    }

}
