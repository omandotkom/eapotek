<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Branch;
use Carbon\Carbon;
use App\Transaction;
use DB;
class TransactionController extends Controller {
    public function showTransactionPage() {
        $cabang = Auth::user()->worker->branch->name;
        $nik = Auth::user()->nik;
        $mytime = Carbon::now();
        $hash = $cabang . $nik . $mytime->toDateTimeString();
        $hash = Hash::make($hash);
        return view('transaction.transaction',['hash' => $hash]);
    }

    public function store(Request $request){
        $request->validate([
            'branch_id' => 'bail|required',
            'hash' => 'required',
            'totalbiaya' => 'required',
            'transaction' => 'required',
        ]);
        $branch_id = $request->branch_id;
        $hash = $request->hash;
        $totalbiaya = $request->totalbiaya;
        $transactions = $request->transaction;
        $someObject = json_decode($transactions);
        $time = Carbon::now();
        $tanggal = $time->toDateString();
        foreach($someObject as $key => $value) {
          $transaksi = new Transaction;
          $transaksi->hash = $hash;
          $transaksi->medicine_id = $value->Kode;
          $transaksi->branch_id = $branch_id;
          $tb = $value->Jumlah * $value->Harga;
          $transaksi->quantity = $value->Jumlah;
          $transaksi->totalbiaya = $tb;
          $transaksi->tanggal = $tanggal;
          $transaksi->save();
            DB::table("medicines")->where('id',$value->Kode)
                    ->decrement("stok",$value->Jumlah);
          }
           return response()->json([
                    'status' => 'success',
                    'code' => 'storeTransaction'
        ]);
    }
}
