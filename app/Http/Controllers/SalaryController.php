<?php

namespace App\Http\Controllers;

use App\Branch;
use Illuminate\Http\Request;
use App\Position;
class SalaryController extends Controller {

    public function showSalaryInputView($branch_id) {
        $branches = Branch::all();
        $positions = Position::where('branch_id',$branch_id)->get();
        return view('salary.salary', ['branches' => $branches,'positions' => $positions]);
    
    }

    public function showCetakSlipGajiView() {
        $branches = Branch::all();
        return view('salary.slip', ['branches' => $branches]);
    }

}
