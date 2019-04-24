@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Tambah / Edit Data Karyawan</div>

                <div class="card-body">
                    <form id="formSupplier" method="post" action="javascript:void(0)">
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" class="form-control" name="nik" id="kontak" placeholder="16102126">
                            </div>
                        
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="kontak" placeholder="Khalid Abdurrahman">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Lengkap beserta kecamatan, kabupaten, provinsi hingga kode pos"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="nomorKTP">Nomor KTP</label>
                            <input type="text" class="form-control" name="nomorKTP" id="kontak" placeholder="+62 ....">
                        </div>
                        <div class="form-group">
                            <label for="kodeCabang">Kode Cabang</label>
                            <select id="kodeCabang" class="form-control">
                                <option selected>Pilih ..</option>
                                <option value="1">CBG001</option>
                                <option value="2">CBG002</option>
                                <option value="3">CBG003</option>
                                <option value="4">CBG004</option>
                            </select> 
                        </div>
                        <div class="form-group">
                            <label for="kodeJabatan">Kode Jabatan</label>
                            <select id="kodeCabang" class="form-control">
                                <option selected>Pilih ..</option>
                                <option value="1">Kepala Cabang</option>
                                <option value="2">Kasir</option>
                                <option value="3">Apoteker</option>
                                <option value="4">Dokter</option>
                            </select> 
                        </div>
                        <div class="text-right">
                            <button type="submit" onclick="onSubmitClicked();" id="send_form" class="btn btn-outline-success">Simpan</button>
                        </div>
                        <script>

                        </script>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
