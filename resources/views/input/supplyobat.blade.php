@extends('layouts.logged')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Tambah / Edit Data Supply Obat</div>

                <div class="card-body">
                    <form id="formNoteSupply" method="post" action="javascript:void(0)">
                        <fieldset disabled>
                            <div class="form-group">
                                <label for="kodeNoteSupply">Kode Note Supply</label>
                                <input type="text" class="form-control" id="kodeNoteSupply" placeholder="NS001">
                            </div>
                        </fieldset>
                        <div class="form-group">
                            <label for="kodeSupplier">Kode Supplier</label>
                            <select id="kodeSupplier" class="form-control">
                                <option selected>Pilih ..</option>
                                <option value="1">SPL2109</option>
                                <option value="2">SPL2124</option>
                                <option value="3">SPL2126</option>
                                <option value="4">SPL2127</option>
                                <option value="5">SPL2131</option>
                                <option value="6">SPL2137</option>
                            </select>
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
