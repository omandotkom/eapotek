@extends('layouts.app')

@section('content')
<script>
    function onSearchClicked() {
        var obatname = $("#searchObat").val();
        var branch_id = $("#namaCabang").val();
        if (branch_id == 0) {
            bootbox.confirm("Apakah anda yakin ingin mencari " + obatname + " di semua cabang ?", function (result) {
                 if (result==true){
                    searchbyParam("medicine", branch_id, obatname);
                 }
            });
        }
        
    }
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lihat Informasi Obat</div>
                <!-- tulis kode disini-->

                <!--sampai sini-->
                <div class="card-body">
                    <div class="input-group input-group-md mb-3">
                        <input id="searchObat" type="text" class="form-control" placeholder="Nama Obat" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button onclick="onSearchClicked();" class="btn btn-outline-secondary" type="button" id="button-addon2">Cari</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="namaCabang">Cabang</label>
                        <select onchange="onBranchChanged('medicine', document.getElementById('namaCabang').value);" id="namaCabang" class="form-control col-md-3">
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
                    <div id="content">
                        <table id="medicinetable" class="table table-responsive-lg table-striped">
                            <thead class="thead text-light bg-success">
                                <tr>
                                    <th scope="col">Kode Obat</th>
                                    <th scope="col">Cabang</th>
                                    <th scope="col">Nama Obat</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Harga</th>

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
