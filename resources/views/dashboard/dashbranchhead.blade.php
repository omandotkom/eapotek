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
                        <p class="card-text text-justify py-3 px-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                          <a href="{{ route('inputObat') }}" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card">
                    <h4 class="card-title text-center pt-2">Melihat Informasi</h4>

                    <img class="card-img-top" src={{ asset('img/dashboard/owner/melihatdatasupplier.png') }} alt="Card image cap">
                         <div class="card-block">
                        <p class="card-text text-justify py-3 px-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card">
                    <h4 class="card-title text-center pt-2">Absensi</h4>
                    <img class="card-img-top" src={{ asset('img/dashboard/owner/melihatdatakaryawan.png') }} alt="Card image cap">
                         <div class="card-block">
                        <p class="card-text text-justify py-3 px-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>

            </div>
            <div class="card-deck pt-3">
                <div class="card">
                    <h4 class="card-title text-center pt-2">Cetak Gaji</h4>

                    <img class="card-img-top" src={{ asset('img/dashboard/owner/melihatdatasuplayobat.png') }} alt="Card image cap">
                         <div class="card-block">
                        <p class="card-text text-justify py-3 px-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card">
                    <h4 class="card-title text-center pt-2">Laporan</h4>
                    <img class="card-img-top" src={{ asset('img/dashboard/owner/mencetaklaporan.png') }} alt="Card image cap">
                         <div class="card-block">
                        <p class="card-text text-justify py-3 px-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
