@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lihat Informasi Supply Obat</div>
                <!-- tulis kode disini-->

                <!--sampai sini-->
                <div class="card-body">
                    <form class="form-inline justify-content-center">
                        <input class="form-control w-50" type="text" placeholder="Cari Note Supply">
                    </form>
                    <div class="form-group">
                        <label for="namaCabang">Cabang</label>
                      <select id="namaCabang" onchange="onBranchChanged('notesupplier', document.getElementById('namaCabang').value);" class="form-control col-md-2">
                            <option value="0">Semua</option>
                            @foreach($branches as $b)
                            @if($b->id==$branch_id){
                            <option value="{{$b->id}}" selected>{{$b->nama}}</option>

                            }@else{
                            <option value="{{$b->id}}">{{$b->nama}}</option>

                            }
                            @endif

                            @endforeach

                        </select>
                    </div>
                    <table class="table table-responsive-lg table-striped">
                        <thead class="thead text-light bg-success">
                            <tr>
                                <th scope="col">Kode Note</th>
                                <th scope="col">Cabang</th>
                                <th scope="col">Supplier</th>
                                <th scope="col">Total Biaya</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                    @php
                            $cnt = 0
                            @endphp
                            @foreach($notesuppliers as $s)
                            <tr>
                                <th scope="row">{{$s->id}}</th>
                                <td>{{$s->branch->nama}}</td>
                                <td>{{$s->supplier->nama}}</td>
                                <td>{{$s->totalbiaya}}</td>
                                <td>{{$s->tanggalsupply}}</td>
                                <td><button type="button" data-toggle="modal" data-target="#mdl{{$s->id}}" class="btn btn-success btn-sm">Detail</button></td>
                                <!-- Modal -->
                        <div class="modal fade" id="mdl{{$s->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Rincian Penyuplaian</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-6 col-md-4">Kode Penyuplaian</div>
                                                <div class="col-6 col-md-8">{{$s->id}}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-4">Cabang</div>
                                                <div class="col-6 col-md-8">{{$s->branch->nama}}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-4">Nama Supplier</div>
                                                <div class="col-6 col-md-8">{{$s->supplier->nama}}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-4">Total Biaya</div>
                                                <div class="col-6 col-md-8">{{$s->totalbiaya}}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-4">Tanggal Supply</div>
                                                <div class="col-6 col-md-8">{{$s->tanggalsupply}}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-4">Deskripsi</div>
                                                <div class="col-6 col-md-8">{{$s->deskripsi}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        </tr>
                        @endforeach
  
                            </tr>
                            
                        </tbody>
                    </table>
{{$notesuppliers->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
