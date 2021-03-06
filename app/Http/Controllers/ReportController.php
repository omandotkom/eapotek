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

    function load($dari, $sampai)
    {

        $branches = Branch::all();
        $transaksiTahunanA = \Lava::DataTable();
        $transaksiTahunanA->addStringColumn('Performa Tahunan Semua Cabang')
            ->addNumberColumn('Performa');
        $data = DB::table('transactions')
            ->select(DB::raw('count(distinct transactions.hash) as jumlah, branch_id as id'))
            ->whereRaw("transactions.tanggal BETWEEN '" . $dari . "' and '" . $sampai . "'")
            ->groupBy('branch_id')->get();

        foreach ($data as $d) {
            $transaksiTahunanA->addRow([$d->id, $d->jumlah]);
        }
        $Tahunan = \Lava::BarChart('Tahunan', $transaksiTahunanA);

        $date = Carbon::Now();
        $BulananList = array();
        $HarianList = array();
        $BeliJualBulananList = array();
        foreach ($branches as $branch) {
            $bulanan = \Lava::DataTable();
            $bulanan->addStringColumn("Bulan")
                ->addNumberColumn("Performa");
            $data = DB::select("select sum(quantity) as jumlah, DAYNAME(tanggal) as day from `transactions` where tanggal BETWEEN '" . $dari . "' AND '" . $sampai . "' and branch_id=" . $branch->id . " group by day");
            $pendapatanHarian = DB::table("transactions")->selectRaw('SUM(totalbiaya) as total, DAYNAME(tanggal) as hari')
                ->whereRaw("branch_id = " . $branch->id . " AND tanggal BETWEEN '" . $dari . "' AND '" . $sampai . "'")->groupBy('hari')->get();

            $BeliJualBulananQuery = DB::select("select sum(t.totalbiaya) as Sell, MONTHNAME(t.tanggal) as TanggalSell, sum(n.totalbiaya) as Buy, MONTHNAME(n.tanggalsupply) as TanggalBuy from transactions as t, note_supplier as n WHERE t.branch_id= " . $branch->id . " AND n.branch_id = " . $branch->id . " GROUP BY TanggalSell, TanggalBuy");
            $harian = \Lava::DataTable();
            $harian->addStringColumn("Hari")->addNumberColumn("Pendapatan");

            $BeliJualBulanan = \Lava::DataTable();
            $BeliJualBulanan->addStringColumn('Bulan')->addNumberColumn('Beli')->addNumberColumn('Jual');
            foreach ($BeliJualBulananQuery as $b) {
                $BeliJualBulanan->addRow([$b->TanggalBuy, $b->Buy, $b->Sell]);
            }
            foreach ($data as $d) {
                $bulanan->addRow([$d->day, $d->jumlah]);
            }

            foreach ($pendapatanHarian as $p) {
                $harian->addRow([$p->hari, $p->total]);
            }

            $BeliJualBulanan = \Lava::ColumnChart('BeliJual' . $branch->id, $BeliJualBulanan);
            $harian = \Lava::AreaChart('Harian' . $branch->id, $harian);
            $bulanan = \Lava::AreaChart('Bulanan' . $branch->id, $bulanan);
            $BulananList[$branch->id] = $bulanan;
            $HarianList[$branch->id] = $harian;
            $BeliJualBulananList[$branch->id] = $BeliJualBulanan;
        }


        return view('report.generalreport', ['Tahunan' => $Tahunan, 'HarianList' => $HarianList, 'BulananList' => $BulananList, 'BeliJualBulananList' => $BeliJualBulananList, 'branches' => $branches]);
    }

    public function branchload($dari, $sampai)
    {

        $branch_id  = Auth::user()->worker->branch_id;
        $bulanan = \Lava::DataTable();
        $bulanan->addStringColumn("Bulan")
            ->addNumberColumn("Performa");
        $data = DB::select("select sum(quantity) as jumlah, DAYNAME(tanggal) as day from `transactions` where tanggal BETWEEN '" . $dari . "' AND '" . $sampai . "' and branch_id=" . $branch_id . " group by day");

        foreach ($data as $d) {
            $bulanan->addRow([$d->day, $d->jumlah]);
        }

        $medicines = DB::table("transactions")->selectRaw("medicine_id, sum(quantity) as jumlah")
            ->where("branch_id", $branch_id)->whereRaw("tanggal BETWEEN '".$dari."' AND '".$sampai."'")->groupBy('medicine_id')->orderByRaw('medicine_id DESC')->limit(20)->get();
        $mostBuy = \Lava::DataTable();
        $mostBuy->addStringColumn("Produk")->addNumberColumn("Jumlah");
        foreach ($medicines as $m) {
            $mostBuy->addRow([$m->medicine_id, $m->jumlah]);
        }



        $pendapatanHarian = DB::table("transactions")->selectRaw('SUM(totalbiaya) as total, DAYNAME(tanggal) as hari')
            ->whereRaw("branch_id = " . Auth::user()->worker->branch_id . " AND tanggal BETWEEN '" . $dari . "' AND '" . $sampai . "'")->groupBy('hari')->get();
        $harian = \Lava::DataTable();
        $harian->addStringColumn("Hari")->addNumberColumn("Total");
        foreach ($pendapatanHarian as $p) {
            $harian->addRow([$p->hari, $p->total]);
        }

        $BeliJualBulananQuery = DB::select("select sum(t.totalbiaya) as Sell, MONTHNAME(t.tanggal) as TanggalSell, sum(n.totalbiaya) as Buy, MONTHNAME(n.tanggalsupply) as TanggalBuy from transactions as t, note_supplier as n WHERE t.branch_id= " . Auth::user()->worker->branch_id . " AND n.branch_id = " . Auth::user()->worker->branch_id . " GROUP BY TanggalSell, TanggalBuy");
        $BeliJualBulanan = \Lava::DataTable();
        $BeliJualBulanan->addStringColumn('Bulan')->addNumberColumn('Beli')->addNumberColumn('Jual');
        foreach ($BeliJualBulananQuery as $b) {
            $BeliJualBulanan->addRow([$b->TanggalBuy, $b->Buy, $b->Sell]);
        }
        $belijual = \Lava::ColumnChart('BeliJual',$BeliJualBulanan);
        $mostBuy = \Lava::BarChart('MostBuy', $mostBuy);
        $bulanan = \Lava::AreaChart('Bulanan', $bulanan);
        $harian = \Lava::AreaChart('Harian', $harian);

        return view('report.branchreport', ['Bulanan' => $bulanan, 'MostBuy' => $mostBuy, 'Harian' => $harian,'BeliJualBulanan'=>$BeliJualBulanan]);
    }
}
