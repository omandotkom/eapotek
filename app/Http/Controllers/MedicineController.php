<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;
class MedicineController extends Controller {

    public function showInputObatView() {
        $cabang = Branch::where('nik', Auth::user()->nik)->first();

        return view('input.obat', ['cabang' => $cabang]);
    }

}
