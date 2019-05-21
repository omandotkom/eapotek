@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lihat Informasi Supplier</div>
                <!-- tulis kode disini-->

                <!--sampai sini-->
                <div class="card-body">
                    <form class="form-inline justify-content-center">
                        <input class="form-control w-50" type="text" placeholder="Cari Nama Supplier">
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
                                <th scope="col">No.</th>
                                <th scope="col">Cabang</th>
                                <th scope="col">Kode Supplier</th>
                                <th scope="col">Nama</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $cnt = 0
                            @endphp
                            @foreach($suppliers as $s)
                            <tr>
                                <th scope="row">{{$cnt+=1}}</th>
                                <td>{{$s->branch->nama}}</td>
                                <td>{{$s->id}}</td>
                                <td>{{$s->nama}}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    {{$suppliers->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
