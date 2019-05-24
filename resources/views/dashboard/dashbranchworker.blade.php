@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card-deck">
                
                <div class="card bg-transparent border-0">
                </div>
                
                <div class="card shadow">
                    <h4 class="card-header text-center pb-2">Transaksi</h4>
                    <img class="card-img-top" src={{ asset('img/dashboard/owner/melihatdataobat.png') }} alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-justify">Transaksi adalah sebuah kegiatan yang dilakukan oleh Karyawan (bagian Kasir) guna mendata atau me- masukan informasi penjualan Obat di E-APOTEK sesuai permintaan konsumen.</p>
                    </div>
                    <a href="{{ route('transactionAdd') }}" class="btn btn-success">Telusuri</a>
                </div>
                
                <div class="card shadow">
                    <h4 class="card-header text-center pb-2">Informasi Obat</h4>
                    <img class="card-img-top" src={{ asset('img/dashboard/owner/melihatdatasupplier.png') }} alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-justify">Informasi Obat adalah sebuah halaman dimana Karyawan akan melihat informasi detail Obat yang tersedia dan dijual oleh Cabang E-APOTEK sesuai lokasi Karyawan bekerja.</p>
                    </div>
                    <a href="{{ route('inputObat') }}" class="btn btn-success">Telusuri</a>
                </div>
                
                <div class="card bg-transparent border-0">
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
