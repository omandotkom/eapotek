<?php

namespace App\Http\Controllers;

use App\Branch;
use Illuminate\Http\Request;
use App\Position;
use Response;
class SalaryController extends Controller {

    public function showSalaryInputView($branch_id) {
        $branches = Branch::all();
        $positions = Position::where('branch_id',$branch_id)->get();
        return view('salary.salary', ['branches' => $branches,'positions' => $positions, 'branch_id' => $branch_id]);
    
    }

    public function showCetakSlipGajiView() {
        $branches = Branch::all();
        return view('salary.slip', ['branches' => $branches]);
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

}
