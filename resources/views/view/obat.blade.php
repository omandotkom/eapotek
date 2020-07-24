@php
$type="viewobat";
@endphp
@extends('layouts.logged')
@section('content')
<script>
    function onSearchClicked() {
        var obatname = $("#searchObat").val();
        var branch_id = $("#namaCabang").val();
        if (branch_id == 0) {
            bootbox.confirm("Apakah anda yakin ingin mencari " + obatname + " di semua cabang ?", function (result) {
                if (result == true) {
                    searchbyParam("medicine", branch_id, obatname);
                }
            });
        } else {
            searchbyParam("medicine", branch_id, obatname);

        }


    }
    
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Lihat Informasi Obat</div>
                <!-- tulis kode disini-->

                <!--sampai sini-->
                <div class="card-body">
                    <div class="input-group input-group-md mx-auto w-75 mb-5">
                        <input id="searchObat" type="text" class="form-control" placeholder="Nama Obat" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button onclick="onSearchClicked();" class="btn btn-outline-secondary" type="button" id="button-addon2">Cari</button>
                        </div>
                        <div class="input-group-append">
                            <a href="{{route('viewObat',Auth::user()->worker->branch_id)}}" class="btn btn-outline-secondary" type="button" role="button" id="button-addon3">Tampil Semua</a>
                        </div>
                    </div>
                    
                    <div class="form-group">
                    @if(Auth::user()->role!="owner")
                        <label for="namaCabang">Cabang</label>
                            <select onchange="onBranchChanged('medicine', document.getElementById('namaCabang').value);" id="namaCabang" disabled="true" class="form-control col-md-3">
                                <option value="0">Semua</option>
                                    @foreach($branches as $b)
                                        @if($b->id==$branch_id)
                                        <option value="{{$b->id}}" selected>{{$b->nama}}</option>
                                        @else
                                        <option value="{{$b->id}}">{{$b->nama}}</option>
                                    @endif
                            @endforeach
                        </select>
                     @else
                            <label for="namaCabang">Cabang</label>
                        <select onchange="onBranchChanged('medicine', document.getElementById('namaCabang').value);" id="namaCabang" class="form-control col-md-3">
                            <option value="0">Semua</option>
                            @foreach($branches as $b)
                            @if($b->id==$branch_id)
                            <option value="{{$b->id}}" selected>{{$b->nama}}</option>

                            @else
                            <option value="{{$b->id}}">{{$b->nama}}</option>

                            
                            @endif

                            @endforeach

                        </select>
                        
                    @endif
                         
                    </div>
                    <div id="content">
                    <div class="table-responsive">    
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
                                    <td>{{$s->stok}}</td>
                                    <td>Rp. {{$s->harga}}</td>
                                    <td><a href="{{route('showeditbyid',$s->id)}}" type="button" class="btn btn-success text-white">Edit</a></td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                        {{$medicines->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
