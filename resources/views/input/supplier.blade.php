@php
$type="input-branchhead";
@endphp
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
                        <script>
                            $(document).ready(function(){
                                $("#updateSupplier").hide();
                            });
                            function onBrowseClicked(){
                                $("#updateSupplier").toggle();
                                $("#insertSupplier").toggle();
                                
                            }
                        </script>
                        <div class="input-group mb-3">
                            <select id="updateSupplier" onchange="onKodeUpdateChanged();" class="form-control">
                                <option value="0">Pilih Supplier</option>
                                @foreach($suppliers as $sp)
                                <option value="{{$sp->id}}">{{$sp->nama}}</option>
                                @endforeach
                            </select>
                            <input type="text" class="form-control" placeholder="Nama Supplier" aria-label="Kode Obat" id="insertSupplier" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button onclick="onBrowseClicked();" class="btn btn-outline-secondary" id="browse" type="button">Pilih</button>
                            </div>
                            <script>
                                function onKodeUpdateChanged() {
                                    // Make a request for a user with a given ID
                                    var content = document.getElementById("updateSupplier");
                                    var id = content.options[content.selectedIndex].value;
                                    axios.get('/view/supplier/search/' + id)
                                        .then(function(response) {
                                            console.log(response);
                                            // handle success
                                            $("#kontak").val(response.data.telepon);
                                            $("#email").val(response.data.email);
                                            $("#lokasi").val(response.data.alamat);
                

                                        })
                                        .catch(function(error) {
                                            // handle error
                                            console.log(error);
                                        })
                                        .finally(function() {
                                            // always executed
                                        });
                                }
                            </script>
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
                            <button type="submit" onclick="onSubmitClicked();" id="send_form" class="btn btn-outline-success mr-2">Simpan</button>
                            <button type="submit" onclick="onUpdateClicked();" id="edit_form"  class="btn btn-outline-info mr-2">Edit</button>
                            <button type="submit" onclick="onDeleteClicked();" id="delete_form"  class="btn btn-outline-danger">Delete</button>
                        </div>
                        <script>
                            var id = null;
                            var nama = null;
                            async function onDeleteClicked() {
                                $("#edit_form").html('Memnghapus...');
                                axios.post('http://homestead.test/input/supplier/delete', {
                                        id: id

                                    })
                                    .then(function(response) {
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
                                        Command: toastr["success"]("Berhasil menghapus data", "Berhasil");

                                        console.log(response);
                                        $("#delete_form").html('Delete');
                                    })
                                    .catch(function(error) {
                                        toastr.error("Gagal menghapus data", "Kesalahan");
                                        $("#delete_form").html('Delete');
                                        console.log(error);
                                    });
                            }
                            async function onUpdateClicked() {

                                $("#edit_form").html('Memperbarui...');
                                axios.post('http://homestead.test/input/supplier/update', {
                                        branch_id: '{{$cabang->id}}',
                                        id: $("#updateSupplier").val(),
                                        alamat: jQuery('#lokasi').val(),
                                        telepon: jQuery('#kontak').val(),
                                        email: jQuery('#email').val()

                                    })
                                    .then(function(response) {
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
                                        $("#edit_form").html('Edit');
                                    })
                                    .catch(function(error) {
                                        toastr.error("Gagal menyimpan data", "Kesalahan");
                                        $("#edit_form").html('Edit');
                                        console.log(error);
                                    });
                            }
                            async function onSubmitClicked() {

                                $("#send_form").html('Menyimpan...');
                                axios.post('http://homestead.test/supplier/store', {
                                        branch_id: '{{$cabang->id}}',
                                        nama: jQuery("#insertSupplier").val(),
                                        alamat: jQuery('#lokasi').val(),
                                        telepon: jQuery('#kontak').val(),
                                        email: jQuery('#email').val()

                                    })
                                    .then(function(response) {
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
                                    .catch(function(error) {
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