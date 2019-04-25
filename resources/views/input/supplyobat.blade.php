@extends('layouts.logged')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Tambah / Edit Informasi Supply Obat</div>

                <div class="card-body">
                    <form id="formNoteSupply" method="post" action="javascript:void(0)">
                        <fieldset disabled>
                            <div class="form-group">
                                <label for="kodeNoteSupply">Kode Note Supply</label>
                                <input type="text" class="form-control" id="kodeNoteSupply" placeholder="NS001">
                            </div>
                        </fieldset>
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
                            <label for="namaSupplier">Supplier</label>
                            <select id="namaSupplier" class="form-control">
                                <option selected>Pilih ..</option>
                                <option value="1">Adinda Miftahul Ilmi Habiba</option>
                                <option value="2">Hesa Abda Arrasyid</option>
                                <option value="3">Khalid Abdurrahman</option>
                                <option value="4">Lela Sari Kristina</option>
                                <option value="5">Muhammad Ilham Hijriyanta</option>
                                <option value="6">Ridwan Risandi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Ex:Penyuplaian obat batuk merk BTK102 sejumlah 190 botol, diterima oleh Wahyu."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="totalBiaya">Total Biaya</label>
                            <input type="text" class="form-control" name="totalBiaya" id="totalBiaya" placeholder="Rp 2.000.000">
                        </div>
                        <div class="form-group">
                            <label for="tanggalSupply">Tanggal</label>
                            <input type="date" id="inputMDEx" class="form-control">
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
