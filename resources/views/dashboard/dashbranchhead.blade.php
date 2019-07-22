@php
$type="dashboard";
@endphp
@extends('layouts.logged')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card-deck">

                <div class="card shadow">
                    <h4 class="card-header text-center px-1 pb-2">Masukan Informasi</h4>
                    <img class="card-img-top" src={{ asset('img/dashboard/owner/melihatdataobat.png') }} alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-justify">Masukan Informasi adalah sebuah kegiatan yang di- lakukan oleh Kepala Cabang guna menambah / bahkan memanipulasi informasi yang ada di E-APOTEK mulai dari Obat, Karyawan, Supplier hingga Supply Obat.</p>
                    </div>
                    <a href="{{ route('inputObat') }}" class="btn btn-success">Telusuri</a>
                </div>

                <div class="card shadow">
                    <h4 class="card-header text-center pb-2">Melihat Informasi</h4>
                    <img class="card-img-top" src={{ asset('img/dashboard/owner/melihatdatasupplier.png') }} alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-justify">Melihat Informasi adalah sebuah kegiatan yang di- lakukan oleh Kepala Cabang untuk dapat melihat seluruh informasi E-APOTEK mulai dari Obat, Karyawan, Supplier hingga Supply Obat.</p>
                    </div>
                    <a <a href="{{ route('viewObatBranch', Auth::user()->worker->branch_id) }}" class="btn btn-success">Telusuri</a>
                </div>

                <div class="card shadow">
                    <h4 class="card-header text-center pb-2">Absensi</h4>
                    <img class="card-img-top" src={{ asset('img/dashboard/owner/melihatdatakaryawan.png') }} alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-justify">Absensi adalah sebuah kegiatan pengambilan data yang di-lakukan oleh Kepala Cabang guna mengetahui jumlah kehadiran Karyawan di E-APOTEK.</p>
                    </div>
                    <a href="{{ route('absensi') }}" class="btn btn-success">Telusuri</a>
                </div>
            </div>

            <div class="card-deck pt-4">
                <div class="card shadow">
                    <h4 class="card-header text-center pb-2">Cetak Slip Gaji</h4>
                    <img class="card-img-top" src={{ asset('img/dashboard/owner/melihatdatasuplayobat.png') }} alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-justify">Cetak Slip Gaji adalah sebuah kegiatan pencetakan data yang dilakukan oleh Kepala Cabang berupa selembar kertas yang berisi catatan rincian gaji yang akan diperoleh Karyawan setelah bekerja.</p>
                    </div>
                    <a href="{{route('slipGaji')}}" class="btn btn-success">Telusuri</a>
                </div>
                <div class="card shadow">
                    <h4 class="card-header text-center pb-2">Transaksi</h4>
                    <img class="card-img-top" src={{ asset('img/dashboard/owner/penentuangaji.png') }} alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-justify">Transaksi adalah sebuah kegiatan yang dilakukan oleh Kepala Cabang untuk me-manipulasi data seperti Tanggal, Nama Barang, Jumlah dan Harga yang ada di E-APOTEK guna menunjang sebuah proses jual beli dengan Customer.</p>
                    </div>
                    <a href="#" onclick="composeTransaction(); return false;" class="btn btn-success">Telusuri</a>
                </div>
                <script>
                        function composeTransaction() {
                            bootbox.dialog({
                                title: 'Pilih Jarak Tanggal Laporan',
                                message: '<p>Pilih Jarak Tanggal Pelaporan (Per Bulan, Minggu, Hari atau tanggal tertentu)</p>dari<input type="date" id="startTransaction" class="form-control"></input>sampai<input type="date" id="sampaiTransaction" class="form-control"></input>',
                                size: 'large',
                                closeButton: true,
                                centerVertical: true,
                                onEscape: true,
                                backdrop: true,
                                buttons: {
                                    next: {
                                        label: 'Lanjutkan',
                                        className: 'btn-success',
                                        callback: function() {
                                            var dari = $("#startTransaction").val();
                                            var sampai = $("#sampaiTransaction").val();
                                            window.location.replace("/view/transaction/{{Auth::user()->worker->branch_id}}/" + dari + "/" + sampai);
                                        }
                                    }
                                }
                            });
                        }
                    </script>
                <div class="card shadow">
                    <h4 class="card-header text-center pb-2">Laporan</h4>
                    <img class="card-img-top" src={{ asset('img/dashboard/owner/mencetaklaporan.png') }} alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-justify">Laporan adalah sebuah halaman berisi informasi dalam bentuk catatan rincian mulai dari Keuangan, Transaksi, dan Absensi yang dapat ditentukan rentang waktu pengambilan data-Nya.</p>
                    </div>
                    <a onclick="compose(); return false;" href="#" class="btn btn-success">Telusuri</a>
                </div>
                <script>
                    function compose() {
                        bootbox.dialog({
                            title: 'Pilih Jarak Tanggal Laporan',
                            message: '<p>Pilih Jarak Tanggal Pelaporan (Per Bulan, Minggu, Hari atau tanggal tertentu)</p>dari<input type="date" id="start" class="form-control"></input>sampai<input type="date" id="sampai" class="form-control"></input>',
                            size: 'large',
                            closeButton: true,
                            centerVertical: true,
                            onEscape: true,
                            backdrop: true,
                            buttons: {
                                next: {
                                    label: 'Lanjutkan',
                                    className: 'btn-success',
                                    callback: function() {
                                        var dari = $("#start").val();
                                        var sampai = $("#sampai").val();
                                        window.location.replace("/view/report/branchhead/" + dari + "/" + sampai);
                                    }
                                }
                            }
                        });
                    }
                </script>
            </div>
        </div>
    </div>
</div>
</div>
@endsection