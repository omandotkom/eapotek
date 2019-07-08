<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
class ReportController extends Controller
{
    function load(){

$votes = \Lava::DataTable();
$votes->addStringColumn('Food Poll')
      ->addNumberColumn('Votes')
      ->addRow(['Tacos',  rand(1000,5000)])
      ->addRow(['Salad',  rand(1000,5000)])
      ->addRow(['Pizza',  rand(1000,5000)])
      ->addRow(['Apples', rand(1000,5000)])
      ->addRow(['Fish',   rand(1000,5000)]);
$BarChart = \Lava::BarChart('BarChart',$votes);

return view('report.obat',['BarChart' => $BarChart]);
    }
}
