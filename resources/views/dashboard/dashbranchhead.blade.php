@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-deck">
                <div class="card">
                    <h4 class="card-title text-center pt-2">Masukan Informasi</h4>

                    <img class="card-img-top" src={{ asset('img/dashboard/owner/melihatdataobat.png') }} alt="Card image cap">
                         <div class="card-block">
                        <p class="card-text text-justify py-3 px-3">Masukan Informasi adalah tempat / halaman dimana Kepala Cabang akan menambah informasi mulai dari Obat, Karyawan, Supplier, hingga Supply Obat.</p>
                    </div>
                          <a href="{{ route('inputObat') }}" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card">
                    <h4 class="card-title text-center pt-2">Melihat Informasi</h4>

                    <img class="card-img-top" src={{ asset('img/dashboard/owner/melihatdatasupplier.png') }} alt="Card image cap">
                         <div class="card-block">
                        <p class="card-text text-justify py-3 px-3">Melihat Informasi adalah tempat / halaman dimana Kepala Cabang akan melihat seluruh informasi EAPOTEK mulai dari Obat, Karyawan, Supplier, hingga Supply Obat.</p>
                    </div>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card">
                    <h4 class="card-title text-center pt-2">Absensi</h4>
                    <img class="card-img-top" src={{ asset('img/dashboard/owner/melihatdatakaryawan.png') }} alt="Card image cap">
                         <div class="card-block">
                        <p class="card-text text-justify py-3 px-3">Absensi adalah sebuah kegiatan pengambilan data yang dilakukan oleh Kepala Cabang guna mengetahui jumlah kehadiran Karyawan di EAPOTEK.</p>
                    </div>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>

            </div>
            <div class="card-deck pt-3">
                <div class="card">
                    <h4 class="card-title text-center pt-2">Cetak Slip Gaji</h4>

                    <img class="card-img-top" src={{ asset('img/dashboard/owner/melihatdatasuplayobat.png') }} alt="Card image cap">
                         <div class="card-block">
                        <p class="card-text text-justify py-3 px-3">Cetak Slip Gaji adalah sebuah kegiatan pencetakan data berupa selembar kertas yang berisi catatan rincian gaji yang akan diperoleh Karyawan setelah bekerja.</p>
                    </div>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card">
                    <h4 class="card-title text-center pt-2">Laporan</h4>
                    <img class="card-img-top" src={{ asset('img/dashboard/owner/mencetaklaporan.png') }} alt="Card image cap">
                         <div class="card-block">
                        <p class="card-text text-justify py-3 px-3">Laporan adalah suatu bentuk informasi yang berisi catatan rincian mulai dari Keuangan, Transaksi, dan Absensi yang dapat ditentukan rentang waktu pengambilan data-Nya.</p>
                    </div>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card bg-transparent border-0">

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
