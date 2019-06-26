@extends('layouts.app')

@section('content')
<script>
    $(document).ready(function(){
        $("#searchbtn").click(function(){
            onSearchClicked();
        });
    });
    function onSearchClicked() {
        var karyawanname = $("#searchKaryawan").val();
        var branch_id = $("#namaCabang").val();
        if (branch_id == 0) {
            bootbox.confirm("Apakah anda yakin ingin mencari " + karyawanname + " di semua cabang ?", function (result) {
                if (result == true) {
                    searchbyParam("worker", branch_id, karyawanname);
                }
            });
        } else {
            searchbyParam("worker", branch_id, karyawanname);

        }


    }
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lihat Informasi Karyawan</div>
                <!-- tulis kode disini-->

                <!--sampai sini-->
                <div class="card-body">
                    <div class="input-group input-group-md col-md-6 offset-3 mb-3">
                        <input id="searchKaryawan" type="text" class="form-control" placeholder="Nama Karyawan"  aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button  class="btn btn-outline-secondary" type="button" id="searchbtn" >Cari</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="namaCabang">Cabang</label>
                        <select onchange="onBranchChanged('worker', document.getElementById('namaCabang').value);"  id="namaCabang" class="form-control col-md-3">
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

                                <td><button type="button" data-toggle="modal" data-target="#mdl{{$s->nik}}" class="btn btn-success btn-sm">Detail</button></td>
                                <!-- Modal -->
                        <div class="modal fade" id="mdl{{$s->nik}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Rincian Karyawan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-6 col-md-4">NIK</div>
                                                <div class="col-6 col-md-8">{{$s->nik}}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-4">Nomor KTP</div>
                                                <div class="col-6 col-md-8">{{$s->noktp}}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-4">Nama Karyawan</div>
                                                <div class="col-6 col-md-8">{{$s->nama}}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-4">Alamat</div>
                                                <div class="col-6 col-md-8">{{$s->alamat}}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-4">Tempat Bekerja</div>
                                                <div class="col-6 col-md-8">{{$s->branch->nama}}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-4">Jabatan</div>
                                                <div class="col-6 col-md-8">{{$s->position->nama}}</div>
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
                    {{$workers->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
