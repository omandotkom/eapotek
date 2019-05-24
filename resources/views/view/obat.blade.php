@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lihat Informasi Obat</div>
                <!-- tulis kode disini-->

                <!--sampai sini-->
                <div class="card-body">
                    <form class="form-inline justify-content-center">
                        <input class="form-control w-50" type="text" placeholder="Cari Nama Obat">
                    </form>
                    <div class="form-group">
                        <label for="namaCabang">Cabang</label>
                        <select onchange="$('#content').remove();" id="namaCabang" class="form-control col-md-2">
                            <option selected>Semua</option>
                            @foreach($branches as $b)
                            <option value="{{$b->id}}">{{$b->nama}}</option>
                            @endforeach
                        </select> 
                    </div>
                    <div id="content">
                        <table id="medicinetable" class="table table-responsive-lg table-striped">
                            <thead class="thead text-light bg-success">
                                <tr>
                                    <th scope="col">Kode Obat</th>
                                    <th scope="col">Cabang</th>
                                    <th scope="col">Nama Obat</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($medicines as $s)
                                <tr>
                                    <td>{{$s->id}}</td>
                                    <td>{{$s->branch->nama}}</td>
                                    <td>{{$s->namaobat}}</td>
                                    <td>{{$s->satuan}}</td>
                                    <td>Rp. {{$s->harga}}</td>
                                    <td><button type="button" class="btn btn-success btn-sm">Detail</button></td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                        {{$medicines->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
