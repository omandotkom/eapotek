@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lihat Informasi Karyawan</div>
                <!-- tulis kode disini-->

                <!--sampai sini-->
                <div class="card-body">
                    <form class="form-inline justify-content-center">
                        <input class="form-control w-50" type="text" placeholder="Cari Nama Karyawan">
                    </form>
                    <div class="form-group">
                        <label for="namaCabang">Cabang</label>
                        <select id="namaCabang" class="form-control col-md-2">
                            <option selected>Semua</option>
                            @foreach($branches as $b)
                            <option value="{{$b->id}}">{{$b->nama}}</option>
                            @endforeach
                        </select> 
                    </div>
                    <table class="table table-responsive-lg table-striped">
                        <thead class="thead text-light bg-success">
                            <tr>
                                <th scope="col">Cabang</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach($workers as $s)
                            <tr>
                                <td>{{$s->branch->nama}}</td>
                                <td>{{$s->nik}}</td>
                                <td>{{$s->nama}}</td>
                                <td>{{$s->position->nama}}</td>
                                
                                <td><button type="button" class="btn btn-success btn-sm">Detail</button></td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    {{$workers->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
