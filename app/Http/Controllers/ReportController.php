<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use App\Transaction;
use App\Branch;
use Carbon\Carbon;
use DB;
class ReportController extends Controller
{

    function load(){
$date = Carbon::now();
$branches = Branch::all();
$transaksiTahunanA = \Lava::DataTable();
$transaksiTahunanA->addStringColumn('Performa Tahunan Semua Cabang')
      ->addNumberColumn('Performa');
$data = DB::table('transactions')
        ->select(DB::raw('count(transactions.id) as jumlah, branch_id as id'))
        ->whereRaw("YEAR(transactions.tanggal) = '". $date->year ."'")
        ->groupBy('branch_id')->get();

foreach($data as $d){
    $transaksiTahunanA->addRow([$d->id, $d->jumlah]);
}
$Tahunan = \Lava::BarChart('Tahunan',$transaksiTahunanA);



/*$data2 = DB::table('transactions')
    ->select(DB::raw('count(id) as jumlah'))
    ->whereRaw("YEAR(tanggal)='".$date->year."'")
    ->whereRaw("branch_id=1")
    ->groupBy('month(tanggal)')->get();*/
    $short = array(
        'Jan', 
        'Feb', 
        'Mar', 
        'Apr', 
        'May', 
        'Jun', 
        'Jul', 
        'Aug', 
        'Sep', 
        'Oct', 
        'Nov', 
        'Dec'
      );
      $BulananList = array();
      foreach($branches as $branch){
        $bulanan = \Lava::DataTable();
$bulanan->addStringColumn("Bulan")
->addNumberColumn("Performa");
        $data = DB::select("select count(id) as jumlah from `transactions` where YEAR(tanggal)='".$date->year."' and branch_id=".$branch->id." group by month(tanggal)");
        $monthCounter = 0;
            foreach($data as $d){
                $bulanan->addRow([$short[$monthCounter],$d->jumlah]);
                $monthCounter++;
            }
            $bulanan = \Lava::AreaChart('Bulanan'.$branch->id,$bulanan);
    $BulananList[$branch->id] = $bulanan;
      }
    

return view('report.generalreport',['Tahunan' => $Tahunan,'BulananList' => $BulananList,'branches' => $branches]);
    }
}
