<?php

namespace App\Http\Controllers;

use App\Branch;
use Illuminate\Http\Request;

class SalaryController extends Controller {

    public function showSalaryInputView() {
        $branches = Branch::all();
        return view('salary.salary', ['branches' => $branches]);
    }

    public function showCetakSlipGajiView() {
        $branches = Branch::all();
        return view('salary.slip', ['branches' => $branches]);
    }

}
