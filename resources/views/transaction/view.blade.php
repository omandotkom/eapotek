@php
$type="viewobat";
@endphp
@extends('layouts.logged')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lihat Informasi Transaksi</div>
                <!-- tulis kode disini-->

                <!--sampai sini-->
                <div class="card-body">
                    
                    <div class="form-group">
                        @if(Auth::user()->role!="owner")
                        <label for="namaCabang">Cabang</label>
                        <select onchange="onTransactionBranchChanged(document.getElementById('namaCabang').value,'{{$from}}','{{$to}}');" id="namaCabang" disabled="true" class="form-control col-md-3">
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
                        <select onchange="onTransactionBranchChanged(document.getElementById('namaCabang').value,'{{$from}}','{{$to}}');" id="namaCabang" class="form-control col-md-3">
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
                    <!--disini tabel -->
                    <table class="table table-responsive-lg table-striped">
                        <thead class="thead text-light bg-success">
                            <tr>
                                <th scope="col">Kode Transaksi</th>
                                <th scope="col">Total Biaya</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transactions as $t)
                            <tr>
                                <td>{{$t->hash}}</td>
                                <td>Rp. {{$t->total}}</td>
                                <td>{{$t->tanggal}}</td>
                                <td><button type="button" onclick="showDetil('{{$t->hash}}');" data-toggle="modal" data-target="#mdl" class="btn btn-success btn-sm">Detail</button></td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <!--sampe sini -->
                    {{$transactions->links()}}
                </div>
                <script>
                    function showDetil(hash) {
                        axios.post('/transaction/detil', {
                                hash: hash
                            })
                            .then(function(response) {


                                var msg = "<h5>Tanggal " + response.data[0].tanggal + "</h5><p>";
                                var total = 0;
                                for (i = 0; i < response.data.length; i++) {
                                    total = total + response.data[i].totalbiaya;
                                    msg = msg.concat(response.data[i].namaobat + " (Rp. " + response.data[i].harga + ") / item");
                                    msg = msg.concat("<b> x " + response.data[i].quantity + " = Rp. " + response.data[i].totalbiaya + "</b><br>");
                                }
                                msg = msg.concat("<h5>Total Biaya : Rp. " + total + "</h5>");
                                bootbox.dialog({
                                    title: 'Rincian Transaksi',
                                    message: msg,
                                    size: 'large',
                                    onEscape: true,
                                    centerVertical: true,
                                    backdrop: true
                                });
                            })
                            .catch(function(error) {
                                console.log(error);
                            });
                    }
                </script>
            </div>
        </div>
    </div>
</div>
@endsection