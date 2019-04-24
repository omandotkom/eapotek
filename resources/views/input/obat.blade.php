@extends('layouts.logged')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Tambah / Edit Data Obat</div>

                <div class="card-body">

                    <form>
                        <div class="form-group">
                            <label for="kodeObat">Kode Obat</label>
                            <input type="text" class="form-control" id="kodeObat" placeholder="BTK2">
                        </div>
                        <div class="form-group">
                            <label for="namaObat">Nama Obat</label>
                            <input type="text" class="form-control" id="namaObat" placeholder="OBH Combine">
                        </div>

                        <div class="form-group">
                            <label for="namaObat">Supplier</label>
                            <select class="form-control">
                                @foreach($supplier as $sp)
                                <option value="{{$sp->id}}">{{$sp->nama}}</option>
                                @endforeach
                               
                                
                            </select>   
                        </div>
                        <div class="form-group">
                            <label for="inputState">Satuan</label>
                            <select id="inputState" class="form-control">
                                <option value="1">Tablet</option>
                                <option value="2">Kapsul</option>
                                <option value="3">Kaplet</option>
                                <option value="3">Puyer</option>
                                <option value="3">Larutan</option>
                                <option value="3">Suspensi</option>
                                <option value="3">Eliksir</option>
                                <option value="3">Injeksi</option>
                                <option value="3">Infus</option>
                                <option value="3">Salep</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="hargaObat">Harga Obat / Satuan</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Default"  placeholder="32.000" aria-describedby="inputGroup-sizing-default">
                            </div>   
                        </div>
                        <div class="form-group">
                            <label for="stokObat">Stok Obat</label>
                            <input type="text" class="form-control" id="stokObat" placeholder="">
                        </div>
                         <div class="text-right">
                            <button type="submit" onclick="onSubmitClicked();" id="send_form" class="btn btn-outline-success">Simpan</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
