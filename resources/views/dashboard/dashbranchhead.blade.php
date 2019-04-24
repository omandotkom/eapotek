@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                    <a href="#" class="btn btn-success">Telusuri</a>
                </div>
                
                <div class="card shadow">
                    <h4 class="card-header text-center pb-2">Absensi</h4>
                    <img class="card-img-top" src={{ asset('img/dashboard/owner/melihatdatakaryawan.png') }} alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-justify">Absensi adalah sebuah kegiatan pengambilan data yang dilakukan oleh Kepala Cabang guna mengetahui jumlah kehadiran Karyawan di E-APOTEK.</p>
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
                    <a href="#" class="btn btn-success">Telusuri</a>
                </div>
                
                <div class="card shadow">
                    <h4 class="card-header text-center pb-2">Laporan</h4>
                    <img class="card-img-top" src={{ asset('img/dashboard/owner/mencetaklaporan.png') }} alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-justify">Laporan adalah sebuah halaman berisi informasi dalam bentuk catatan rincian mulai dari Keuangan, Transaksi, dan Absensi yang dapat ditentukan rentang waktu pengambilan data-Nya.</p>
                    </div>
                    <a href="#" class="btn btn-success">Telusuri</a>
                </div>
            
                <div class="card bg-transparent border-0">
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
