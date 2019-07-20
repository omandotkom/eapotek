@php
$type="viewobat";
@endphp
@extends('layouts.logged')
@section('content')
<script>
    function onSearchClicked() {
        var obatname = $("#searchObat").val();
        var branch_id = $("#namaCabang").val();
        if (branch_id == 0) {
            bootbox.confirm("Apakah anda yakin ingin mencari " + obatname + " di semua cabang ?", function(result) {
                if (result == true) {
                    searchbyParam("medicine", branch_id, obatname);
                }
            });
        } else {
            searchbyParam("medicine", branch_id, obatname);

        }


    }
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <div class="card">
                <div class="card-header">Jumlah Penjualan Item di {{ Auth::user()->worker->branch->nama}}</div>
                <!-- tulis kode disini-->

                <!--sampai sini-->
                <div class="card-body">

                    <div id="poll_div_bulanan"></div>

                    @areachart('Bulanan','poll_div_bulanan')

                </div>
            </div>
            <div class="card">
                <div class="card-header">Obat yang Paling Banyak di Beli</div>
                <!-- tulis kode disini-->

                <!--sampai sini-->
                <div class="card-body">
                    <div id="poll_div_most_buy"></div>
                    @barchart('MostBuy','poll_div_most_buy')
                </div>
            </div>
            <div class="card">
                <div class="card-header">Pendapatan Kotor</div>
                <!-- tulis kode disini-->

                <!--sampai sini-->
                <div class="card-body">
                    <div id="poll_div_harian"></div>
                    @areachart('Harian','poll_div_harian')
                </div>
            </div>
            <div class="card">
                <div class="card-header">Selisih Pembelian & Penjualan</div>

                <div class="card-body">
                    <div id="poll_div_bj"></div>
                    @columnchart('BeliJual','poll_div_bj')
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection