@php
$type="input-branchhead";
@endphp
@extends('layouts.logged')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Tambah / Edit Informasi Karyawan</div>

                <div class="card-body">
                    <form id="formSupplier" method="post" action="javascript:void(0)">
                        <fieldset disabled>
                            <div class="form-group">
                                <label for="namaCabang">Cabang</label>
                                <input type="text" id="namaCabang" value="{{$cabang->nama}}" class="form-control" placeholder="Disabled input">
                            </div>
                        </fieldset>
                        <script>
                            $(document).ready(function() {
                                $("#updateWorker").hide();
                            });

                            function onBrowseClicked() {
                                $("#updateWorker").toggle();
                                $("#insertWorker").toggle();

                            }
                        </script>
                        <div class="input-group mb-3">
                            <select id="updateWorker" onchange="onKodeUpdateChanged();" class="form-control">
                                <option value="0">Pilih NIK</option>
                                @foreach($workers as $sp)
                                <option value="{{$sp->nik}}">{{$sp->nama}}</option>
                                @endforeach
                            </select>
                            <input type="text" class="form-control" placeholder="Nomor Induk Karyawan" aria-label="Kode Obat" id="insertWorker" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button onclick="onBrowseClicked();" class="btn btn-outline-secondary" id="browse" type="button">Pilih</button>
                            </div>
                            <script>
                                function onKodeUpdateChanged() {
                                    // Make a request for a user with a given ID
                                    var content = document.getElementById("updateWorker");
                                    var id = content.options[content.selectedIndex].value;
                                    axios.get('/input/karyawan/search/' + id)
                                        .then(function(response) {
                                            console.log(response);
                                            // handle success
                                            $("#namalengkap").val(response.data.nama);
                                            $("#alamat").val(response.data.alamat);
                                            $("#noktp").val(response.data.noktp);
                                            $("#position_id").val(response.data.position_id)

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
                            <label for="nomorKTP">Nomor KTP</label>
                            <input type="text" class="form-control" name="nomorKTP" id="noktp" placeholder="321xxxxxxxxxxxxx">
                        </div>


                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="namalengkap" placeholder="Khalid Abdurrahman">
                            <div class="invalid-feedback">Harus di isi!</div>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Lengkap beserta kecamatan, kabupaten, provinsi hingga kode pos"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="kodeJabatan">Jabatan</label>
                            <select id="position_id" class="form-control">
                                <option selected>Pilih ..</option>
                                @foreach($cabang->Positions as $p)
                                <option value="{{$p->id}}">{{$p->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="text-right">
                            <button type="submit" onclick="onSubmitClicked();" id="send_form" class="btn btn-outline-success mr-2">Simpan</button>
                            <button type="submit" onclick="onUpdateClicked();" id="edit_form" class="btn btn-outline-info mr-2">Edit</button>
                            <button type="submit" onclick="onDeleteClicked();" id="delete_form" class="btn btn-outline-danger">Delete</button>
                        </div>
                        <script>
                            function onDeleteClicked() {
                                axios.get('/input/karyawan/delete/' + jQuery('#updateWorker').val())
                                    .then(function(response) {
                                        // handle success
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
                                    })
                                    .catch(function(error) {
                                        toastr.error("Gagal menghapus data", "Kesalahan");
                                        // handle error
                                        console.log(error);
                                    })
                                    .finally(function() {
                                        // always executed
                                    });

                            }

                            function onUpdateClicked() {
                                $("#edit_form").html('Memperbaruo...');
                                axios.post('/input/karyawan/update', {
                                        nik: jQuery('#updateWorker').val(),
                                        branch_id: '{{$cabang->id}}',
                                        position_id: jQuery('#position_id').val(),
                                        nama: jQuery('#namalengkap').val(),
                                        alamat: jQuery('#alamat').val(),
                                        noktp: jQuery('#noktp').val()

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
                                        toastr.error("Gagal memperbarui data", "Kesalahan");
                                        $("#edit_form").html('Edit');
                                        console.log(error);
                                    });
                            }
                            async function onSubmitClicked() {

                                $("#send_form").html('Menyimpan...');
                                axios.post('/input/karyawan/store', {
                                        nik: jQuery('#insertWorker').val(),
                                        branch_id: '{{$cabang->id}}',
                                        position_id: jQuery('#position_id').val(),
                                        nama: jQuery('#namalengkap').val(),
                                        alamat: jQuery('#alamat').val(),
                                        noktp: jQuery('#noktp').val()

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