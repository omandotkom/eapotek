<?php

namespace App\Http\Controllers;

use App\Branch;
use Illuminate\Http\Request;
use App\Position;
use Response;
use Auth;
use App\Attendance;
use App\Worker;
class SalaryController extends Controller {

    public function showSalaryInputView($branch_id) {
        $branches = Branch::all();
        $positions = Position::where('branch_id',$branch_id)->get();
        return view('salary.salary', ['branches' => $branches,'positions' => $positions, 'branch_id' => $branch_id]);
    
    }

    public function showCetakSlipGajiView() {
        $workers = Worker::where('branch_id' , Auth::user()->worker->branch_id)->get();
        return view('salary.slip', ['workers' => $workers]);
    }
    
    public function updateSalary(Request $request){
        $id = $request->id;
        $salary = $request->salary;
        $position = Position::find($id);
        $position->salary = $salary;
        $position->save();
        return Response::json([
            'action' => 'update_salary'
                ], 201); // Status code here
    }

    public function loadData(Request $request){ 
        //$attendances = Attendance::where('nik',$request->nik)->whereBetween('tanggal',[$request->from,$request->to])->get();
        $masuk = Attendance::where('nik',$request->nik)->where("keterangan","Masuk")->whereBetween('tanggal',[$request->from,$request->to])->count();
        $izin = Attendance::where('nik',$request->nik)->where("keterangan","Izin")->whereBetween('tanggal',[$request->from,$request->to])->count();
        $alfa = Attendance::where('nik',$request->nik)->where("keterangan","Alpha")->whereBetween('tanggal',[$request->from,$request->to])->count();
        $worker = Worker::with('position')->where('nik',$request->nik)->first(); 
    return response()->json(['worker'=>$worker,'masuk'=>$masuk,'izin' => $izin,'alpha'=>$alfa]);      
//        return response(['attendances' => $attendances, 'worker' => $worker]);
        
    }
}
