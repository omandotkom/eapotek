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
                                <label for="namaCabang">Cabang</label>
                                <input type="text" id="namaCabang" value="{{$cabang->nama}}" class="form-control" placeholder="Disabled input">
                            </div>
                        </fieldset>

                        <div class="form-group">
                            <label for="namaSupplier">Supplier</label>
                            <select id="namaSupplier" class="form-control">
                                <option selected>Pilih ..</option>
                                @foreach($suppliers as $sp)
                                <option value="{{$sp->id}}">{{$sp->nama}}</option>
                                @endforeach

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
                            <input type="date" id="tanggal" class="form-control">
                        </div>
                        <div class="text-right">
                            <button type="submit" onclick="onSubmitClicked();" id="send_form" class="btn btn-outline-success">Simpan</button>
                        </div>
                        <script>
                            async function onSubmitClicked() {

                                $("#send_form").html('Menyimpan...');
                                axios.post('http://homestead.test/input/supplyobat/store', {
                                    branch_id: '{{$cabang->id}}',
                                    supplier_id: jQuery('#namaSupplier').val(),
                                    deskripsi: jQuery('#deskripsi').val(),
                                    totalbiaya: jQuery('#totalBiaya').val(),
                                    tanggalsupply: jQuery('#tanggal').val()

                                })
                                        .then(function (response) {
                                            toastr.options = {
                                                "closeButton": false,
                                                "debug": false,
                                                "newestOnTop": false,
                                                "progressBar": false,
                                                "positionClass": "toast-top-center",
                                                "preventDuplicates": false,
                                                "onclick": null,
                                                "showDuration": "300",
                                                "hideDuration": "1000",
                                                "timeOut": "5000",
                                                "extendedTimeOut": "1000",
                                                "showEasing": "swing",
                                                "hideEasing": "linear",
                                                "showMethod": "fadeIn",
                                                "hideMethod": "fadeOut"
                                            };
                                            Command: toastr["success"]("Berhasil menyimpan data", "Berhasil");

                                            console.log(response);
                                            $("#send_form").html('Simpan');
                                        })
                                        .catch(function (error) {
                                            toastr.error("Gagal menyimpan data", "Kesalahan");
                                            $("#send_form").html('Simpan');
                                            console.log(error);
                                        });
                            }
                        </script>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
