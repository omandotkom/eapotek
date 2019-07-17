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
            bootbox.confirm("Apakah anda yakin ingin mencari " + obatname + " di semua cabang ?", function (result) {
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
                <div class="card-header">Penjualan Tahunan Semua Cabang</div>
                
                <div class="card-body">
                <div id="poll_div"></div>
                @barchart('Tahunan','poll_div')
                @foreach($branches as $branch)
                {{$branch->id}}. {{$branch->nama}}<br>
                @endforeach
                </div>
            </div>
            <div class="card">
                <div class="card-header">Jumlah Item yang Dibeli di Setiap Cabang</div>
                <!-- tulis kode disini-->

                <!--sampai sini-->
                <div class="card-body">
                
               <div id="poll_div_bulanan_1"></div>
               <div id="poll_div_bulanan_2"></div>
               <div id="poll_div_bulanan_3"></div>
               <div id="poll_div_bulanan_4"></div>
               @areachart('Bulanan1','poll_div_bulanan_1')
               
               @areachart('Bulanan2','poll_div_bulanan_2')
               
               @areachart('Bulanan3','poll_div_bulanan_3')
               
               @areachart('Bulanan4','poll_div_bulanan_4')
               
                 </div>
            </div>
            <div class="card">
                <div class="card-header">Lihat Informasi Obat</div>
                <!-- tulis kode disini-->

                <!--sampai sini-->
                <div class="card-body">
                <div id="poll_div"></div>
                 </div>
            </div>
            <div class="card">
                <div class="card-header">Lihat Informasi Obat</div>
                <!-- tulis kode disini-->

                <!--sampai sini-->
                <div class="card-body">
                <div id="poll_div"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
