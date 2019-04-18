@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-deck">
                <div class="card">
                    <h4 class="card-title text-center pt-2">Transaksi</h4>

                    <img class="card-img-top" src={{ asset('img/dashboard/owner/melihatdataobat.png') }} alt="Card image cap">
                         <div class="card-block">
                        <p class="card-text text-justify py-3 px-3">Transaksi adalah sebuah kegiatan pengambilan data yang dilakukan oleh Karyawan yang dalam hal ini yaitu Kasir, guna mendata penjualan Obat di EAPOTEK.</p>
                    </div>
                         <a href="{{ route('inputObat') }}" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card">
                    <h4 class="card-title text-center pt-2">Informasi Obat</h4>

                    <img class="card-img-top" src={{ asset('img/dashboard/owner/melihatdatasupplier.png') }} alt="Card image cap">
                         <div class="card-block">
                        <p class="card-text text-justify py-3 px-3">Informasi Obat adalah tempat / halaman dimana Karyawan akan melihat informasi Obat yang tersedia dan di jual sesuai Cabang Karyawan EPOTEK bekerja.</p>
                        </div>
                         <a href="{{ route('inputObat') }}" class="btn btn-primary">Go somewhere</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
