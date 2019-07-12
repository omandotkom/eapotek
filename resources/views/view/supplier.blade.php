@php
$type="viewobat";
@endphp
@extends('layouts.logged')

@section('content')
<script>

    $(document).ready(function () {
        $("#searchbtn").click(function () {
            var suppliername = $("#searchSupplier").val();
            var branch_id = $("#namaCabang").val();
            if (branch_id == 0) {
                bootbox.confirm("Apakah anda yakin ingin mencari " + suppliername + " di semua cabang ?", function (result) {
                    if (result == true) {
                        searchbyParam("supplier", branch_id, suppliername);
                    }
                });
            }else{
                   searchbyParam("supplier", branch_id, suppliername);
                   
            }
        });
    });

</script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lihat Informasi Supplier</div>
                <!-- tulis kode disini-->

                <!--sampai sini-->
                <div class="card-body">
                    <div class="input-group input-group-md col-md-6 offset-3 mb-3">
                        <input id="searchSupplier" type="text" class="form-control" placeholder="Nama Supplier"  aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button  class="btn btn-outline-secondary" type="button" id="searchbtn" >Cari</button>
                        </div>
                    </div>
                    <div class="form-group">
                    @if(Auth::user()->role!="owner")
                        <label for="namaCabang">Cabang</label>
                            <select onchange="onBranchChanged('supplier', document.getElementById('namaCabang').value);" id="namaCabang" disabled="true" class="form-control col-md-3">
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
                        <select onchange="onBranchChanged('supplier', document.getElementById('namaCabang').value);" id="namaCabang" class="form-control col-md-3">
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
                    <table class="table table-responsive-lg table-striped">
                        <thead class="thead text-light bg-success">
                            <tr>
                                <th scope="col">Kode</th>
                                <th scope="col">Cabang</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Nomor HP</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $cnt = 0
                            @endphp
                            @foreach($suppliers as $s)
                            <tr>
                                <th scope="row">{{$s->id}}</th>
                                <td>{{$s->branch->nama}}</td>
                                <td>{{$s->nama}}</td>
                                <td>{{$s->telepon}}</td>
                                <td><button type="button" data-toggle="modal" data-target="#mdl{{$s->id}}" class="btn btn-success btn-sm">Detail</button></td>
                                <!-- Modal -->
                        <div class="modal fade" id="mdl{{$s->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Rincian Supplier</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-6 col-md-4">Kode Supplier</div>
                                                <div class="col-6 col-md-8">{{$s->id}}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-4">Nama Supplier</div>
                                                <div class="col-6 col-md-8">{{$s->nama}}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-4">Telepon</div>
                                                <div class="col-6 col-md-8">{{$s->telepon}}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-4">Email</div>
                                                <div class="col-6 col-md-8">{{$s->email}}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-4">Alamat</div>
                                                <div class="col-6 col-md-8">{{$s->alamat}}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-4">Menyuplai ke</div>
                                                <div class="col-6 col-md-8">{{$s->branch->nama}}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-4">Terakhir Mengirim</div>
                                                <div class="col-6 col-md-8">{{$s->branch->nama}}</div>
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

                        </tbody>
                    </table>
                    {{$suppliers->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
