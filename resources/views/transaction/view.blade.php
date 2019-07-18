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
                    <!--disini tabel -->
                    <!--sampe sini -->
                    {{$suppliers->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
