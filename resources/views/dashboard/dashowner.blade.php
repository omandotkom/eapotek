@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-deck">
                <div class="card">
                    <h4 class="card-title text-center pt-2">Informasi Obat</h4>

                    <img class="card-img-top" src={{ asset('img/dashboard/owner/melihatdataobat.png') }} alt="Card image cap">
                         <div class="card-block">
                        <p class="card-text text-justify py-3 px-3">Informasi Obat adalah tempat / halaman dimana Pemilik Toko akan melihat informasi Obat yang tersedia dan di jual pada Cabang EPOTEK yang dipilih.</p>
                    </div>
                         <a href="{{ route('inputObat') }}" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card">
                    <h4 class="card-title text-center pt-2">Informasi Supplier</h4>

                    <img class="card-img-top" src={{ asset('img/dashboard/owner/melihatdatasupplier.png') }} alt="Card image cap">
                         <div class="card-block">
                        <p class="card-text text-justify py-3 px-3">Informasi Supplier adalah tempat / halaman dimana Pemilik Toko akan melihat informasi Supplier yang telah bekerjasama pada Cabang EPOTEK yang dipilih.</p>
                    </div>
                         <a href="{{ route('inputObat') }}" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card">
                    <h4 class="card-title text-center pt-2">Informasi Karyawan</h4>
                    <img class="card-img-top" src={{ asset('img/dashboard/owner/melihatdatakaryawan.png') }} alt="Card image cap">
                         <div class="card-block">
                        <p class="card-text text-justify py-3 px-3">Informasi Karyawan adalah tempat / halaman dimana Pemilik Toko akan melihat informasi Karyawan yang bekerja pada Cabang EPOTEK yang dipilih.</p>
                    </div>
                         <a href="{{ route('inputObat') }}" class="btn btn-primary">Go somewhere</a>
                </div>

            </div>
            <div class="card-deck pt-3">
                <div class="card">
                    <h4 class="card-title text-center pt-2">Supply Obat</h4>

                    <img class="card-img-top" src={{ asset('img/dashboard/owner/melihatdatasuplayobat.png') }} alt="Card image cap">
                         <div class="card-block">
                        <p class="card-text text-justify py-3 px-3">Supply Obat adalah tempat / halaman dimana Pemilik Toko akan melihat informasi Supply Obat pada Cabang EPOTEK yang dipilih.</p>
                    </div>
                         <a href="{{ route('inputObat') }}" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card">
                    <h4 class="card-title text-center pt-2">Penentuan Gaji</h4>

                    <img class="card-img-top" src={{ asset('img/dashboard/owner/penentuangaji.png') }} alt="Card image cap">
                         <div class="card-block">
                        <p class="card-text text-justify py-3 px-3">Penentuan Gaji adalah sebuah kegiatan pengkalkulasian yang dilakukan oleh Pemilik Toko guna mengatur besaran gaji Karyawan di setiap cabang EAPOTEK.</p>
                    </div>
                         <a href="{{ route('inputObat') }}" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card">
                    <h4 class="card-title text-center pt-2">Laporan</h4>
                    <img class="card-img-top" src={{ asset('img/dashboard/owner/mencetaklaporan.png') }} alt="Card image cap">
                         <div class="card-block">
                        <p class="card-text text-justify py-3 px-3">Laporan adalah suatu bentuk informasi yang berisi catatan rincian mulai dari Keuangan, Transaksi, dan Absensi yang dapat ditentukan rentang waktu pengambilan data-Nya.</p>
                    </div>
                         <a href="{{ route('inputObat') }}" class="btn btn-primary">Go somewhere</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
