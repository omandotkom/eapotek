@php
$type="input-absensi";
@endphp
@extends('layouts.logged')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Absensi</div>

                <div class="card-body">
                    <form id="formSupplier" method="post" action="javascript:void(0)">
                       <fieldset disabled>
                            <div class="form-group">
                                <label for="namaCabang">Cabang</label>
                                <input type="text" id="namaCabang" value="{{$cabang->nama}}" class="form-control" placeholder="Disabled input">
                            </div>
                        </fieldset>
                        <div class="form-group">
                             <label for="nik">Karyawan</label>
                            <select id="nik" class="form-control">
                                @foreach($worker as $w)
                                <option value="{{$w->nik}}">{{$w->nama}}</option>
                                @endforeach


                            </select>   
                        </div>
                       
                        <div class="form-group">
                            <label for="tanggalSupply">Tanggal</label>
                            <input type="date" id="tanggal" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="keterangan" value ="Masuk" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1">Masuk</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="keterangan" value ="Izin" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">Izin</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline3" name="keterangan" value ="Alpha" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline3">Alpha</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline4" name="keterangan" value ="Cuti" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline4">Cuti</label>
                        </div>
                        <div class="text-right">
                            <button type="submit" onclick="onSubmitClicked();" id="send_form" class="btn btn-outline-success">Simpan</button>
                        </div>
                        <script>
                            async function onSubmitClicked() {

                                $("#send_form").html('Menyimpan...');
                                axios.post('{{route("simpanabsensi")}}', {
                                    nik: jQuery('#nik').val(),
                                    tanggal: jQuery('#tanggal').val(),
                                    keterangan: jQuery("input[name='keterangan']:checked").val()

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
