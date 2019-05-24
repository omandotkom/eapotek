<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Branch;
use Carbon\Carbon;

class TransactionController extends Controller {

    public function Store(Request $request) {
        
    }

    public function showTransactionPage() {
        $cabang = Branch::where('nik', Auth::user()->nik)->first();
        $nik = Auth::user()->nik;
        $mytime = Carbon::now();
        $hash = $cabang . $nik . $mytime->toDateTimeString();
        $hash = Hash::make($hash);
        return view('transaction.transaction',['hash' => $hash]);
    }

}
