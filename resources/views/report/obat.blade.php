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
                <div class="card-header">Lihat Informasi Obat</div>
                <!-- tulis kode disini-->

                <!--sampai sini-->
                <div class="card-body">
                <div id="poll_div"></div>
                @barchart('BarChart', 'poll_div')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
