@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Tambah / Edit Informasi Karyawan</div>

                <div class="card-body">
                    <form id="formSupplier" method="post" action="javascript:void(0)">
                        <div class="form-group">
                            <label for="namaCabang">Cabang</label>
                            <select id="namaCabang" class="form-control col-md-2">
                                <option selected>Pilih ..</option>
                                <option value="1">Bekasi1</option>
                                <option value="2">Bekasi2</option>
                                <option value="3">Purwokerto</option>
                                <option value="4">Yogyakarta</option>
                            </select> 
                        </div>
                        <div class="form-group">
                            <label for="nomorKTP">Nomor KTP</label>
                            <input type="text" class="form-control" name="nomorKTP" id="kontak" placeholder="321xxxxxxxxxxxxx">
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" name="nik" id="kontak" placeholder="16102126">
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="kontak" placeholder="Khalid Abdurrahman">
                            <div class="invalid-feedback">Harus di isi!</div>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Lengkap beserta kecamatan, kabupaten, provinsi hingga kode pos"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="nomorHP">Nomor HP</label>
                            <input type="text" class="form-control" name="nomorHP" id="kontak" placeholder="+62 xxxxxxxxxxx">
                        </div>
                        <div class="form-group">
                            <label for="kodeJabatan">Jabatan</label>
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
