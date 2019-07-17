<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use App\Transaction;
use App\Branch;
use Carbon\Carbon;
use DB;
use Auth;
class ReportController extends Controller
{

    function load(){
$date = Carbon::now();
$branches = Branch::all();
$transaksiTahunanA = \Lava::DataTable();
$transaksiTahunanA->addStringColumn('Performa Tahunan Semua Cabang')
      ->addNumberColumn('Performa');
$data = DB::table('transactions')
        ->select(DB::raw('sum(transactions.quantity) as jumlah, branch_id as id'))
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
   
      $BulananList = array();
      foreach($branches as $branch){
        $bulanan = \Lava::DataTable();
$bulanan->addStringColumn("Bulan")
->addNumberColumn("Performa");
        $data = DB::select("select sum(quantity) as jumlah, MONTHNAME(tanggal) as bulan from `transactions` where YEAR(tanggal)='".$date->year."' and branch_id=".$branch->id." group by month(tanggal), bulan");
       
            foreach($data as $d){
                $bulanan->addRow([$d->bulan,$d->jumlah]);
               
            }
            $bulanan = \Lava::AreaChart('Bulanan'.$branch->id,$bulanan);
    $BulananList[$branch->id] = $bulanan;
      }
    

return view('report.generalreport',['Tahunan' => $Tahunan,'BulananList' => $BulananList,'branches' => $branches]);
    }

    public function branchload(){
   
        $date = Carbon::now();
        $branch_id  = Auth::user()->worker->branch_id;
        $bulanan = \Lava::DataTable();
        $bulanan->addStringColumn("Bulan")
->addNumberColumn("Performa");
        $data = DB::select("select sum(quantity) as jumlah, MONTHNAME(tanggal) as bulan from `transactions` where YEAR(tanggal)='".$date->year."' and branch_id=".$branch_id." group by month(tanggal), bulan");
      
            foreach($data as $d){
                $bulanan->addRow([$d->bulan,$d->jumlah]);
           
            }
        
        $medicines = DB::table('transactions')->selectRaw('medicine_id, sum(quantity) as jumlah')
            ->where('branch_id',$branch_id)->groupBy('medicine_id')->orderByRaw('medicine_id DESC')->get();
            $mostBuy = \Lava::DataTable();
            $mostBuy->addStringColumn("Produk")->addNumberColumn("Jumlah");
        foreach($medicines as $m){
            $mostBuy->addRow([$m->medicine_id,$m->jumlah]);
        }
        $mostBuy = \Lava::BarChart('MostBuy',$mostBuy);    
        $bulanan = \Lava::AreaChart('Bulanan',$bulanan);
        return view('report.branchreport',['Bulanan' => $bulanan,'MostBuy' => $mostBuy]);
        
    }
}
