@extends('layouts.app')

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
                                <label for="kodeAttendance">Kode Absensi</label>
                                <input type="text" id="kodeAttendance" value="" class="form-control" placeholder="Disabled input">
                            </div>
                        </fieldset>
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" name="nik" id="kontak" placeholder="16102126">
                        </div>
                        <div class="form-group">
                            <label for="tanggalSupply">Tanggal</label>
                            <input type="date" id="inputMDEx" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1">Masuk</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">Izin</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline3">Alpha</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline4" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline4">Cuti</label>
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
