@extends('layouts.logged')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Tambah / Edit Informasi Supplier</div>

                <div class="card-body">
                    <form id="formSupplier" method="post" action="javascript:void(0)">
                        <fieldset disabled>
                            <div class="form-group">
                                <label for="namaCabang">Cabang</label>
                                <input type="text" id="namaCabang" value="{{$cabang->nama}}" class="form-control" placeholder="Disabled input">
                            </div>
                        </fieldset>
                       <!-- <div class="form-group">
                            <label for="kodeSupplier">Kode Supplier</label>
                            <input type="text" class="form-control" name="kodeSupplier" id="kodeSupplier" placeholder="--">
                        </div>-->

                        <div class="form-group">
                            <label for="namaSupplier">Nama Supplier</label>
                            <input type="text" class="form-control" name="namaSupplier" id="namaSupplier" placeholder="--">
                        </div>
                        <div class="form-group">
                            <label for="nomorHP">Nomor HP</label>
                            <input type="text" class="form-control" name="nomorHP" id="kontak" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="lokasi">Lokasi</label>
                            <textarea class="form-control" id="lokasi" name="lokasi" rows="3"></textarea>
                        </div>
                        <div class="text-right">
                            <button type="submit" onclick="onSubmitClicked();" id="send_form" class="btn btn-outline-success">Simpan</button>
                        </div>
                        <script>
                            async function onSubmitClicked() {

                                $("#send_form").html('Menyimpan...');
                                axios.post('https://homestead.test/supplier/store', {
                                    branch_id: '{{$cabang->id}}',
                                    nama: jQuery('#namaSupplier').val(),
                                    alamat: jQuery('#lokasi').val(),
                                    telepon: jQuery('#kontak').val(),
                                    email: jQuery('#email').val()

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
