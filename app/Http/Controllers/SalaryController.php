<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function showSalaryInputView(){
        return view('salary.salary');
    }
}
