@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Transaksi</div>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
                
                <div class="card-body">
                    <form id="formSupplier" method="post" action="javascript:void(0)">
                        {{-- bagian branch, sedang dikerjakan
                        <fieldset disabled>
                            <div class="form-group">
                                <label for="namaCabang">Cabang</label>
                                <input type="text" id="namaCabang" value="{{$cabang->nama}}" class="form-control" placeholder="Disabled input">
                </div>
                </fieldset>
                --}}
                <div class="form-row">
                   {{--fieldset disabled> 
                        <div class="form-group ml-1 mr-2">
                            <label for="kodeTransaksi">Kode Transaksi</label>
                            <input type="text" class="form-control" value='{{$hash}}' id="kodeTransaksi">
                        </div>
                    </fieldset>--}}
                    <fieldset disabled>
                        <div class="form-group mx-1">
                            <label for="tanggalTransaksi">Tanggal</label>
                            <input type="text" value='{{ date("Y-m-d") }}' class="form-control" id="tanggalTransaksi">
                        </div>
                    </fieldset>
                    <div class="form-group col-md-4">
                        <label for="namaObat">Nama Obat</label>
                        <input type="text" class="form-control" id="namaObat" placeholder="OBH Combine">
                    </div>
                    <div class="form-group col-md-1">
                        <label for="jumlah">Jumlah</label>
                        <input type="text" class="form-control" id="jumlah" placeholder="ex:10">
                    </div>
                    <div class="form-group col-md-1 pt-2 ml-4">
                        <label></label>
                        <button type="submit" onclick="onSubmitClicked();" id="add_form" class="btn btn-outline-success">Tambah</button>
                    </div>
                </div>
                <table class="table table-responsive-lg table-striped">
                    <thead class="thead text-light bg-success">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Tangal</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><button type="button" class="btn btn-success btn-sm">Delete</button></td>
                        </tr>                        
                    </tbody>
                </table>
                <fieldset disabled> 
                    <div class="form-group row offset-7">
                        <label for="totalBiaya" class="col-sm-4 col-form-label">Total</label>
                        <div class="input-group col-sm-8">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Rp</span>
                            </div>
                            <input type="text" class="form-control" id="totalBiaya" aria-label="totalBiaya" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </fieldset>
                <div class="form-group row offset-7">
                    <label for="jumlahBayar" class="col-sm-4 col-form-label">Jumlah Bayar</label>
                    <div class="input-group col-sm-8">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon2">Rp</span>
                        </div>
                        <input type="text" class="form-control" id="jumlahBayar" aria-label="jumlahBayar" aria-describedby="basic-addon2">
                    </div>
                </div>
                <fieldset disabled>
                    <div class="form-group row offset-7">
                        <label for="sisa" class="col-sm-4 col-form-label">Sisa</label>
                        <div class="input-group col-sm-8">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">Rp</span>
                        </div>
                            <input type="text" class="form-control" id="sisa" aria-label="sisa" aria-describedby="basic-addon3">
                        </div>
                    </div>
                </fieldset>
                <div class="text-right">
                    <button type="submit" onclick="onSubmitClicked();" id="send_form" class="btn btn-outline-success">Cetak</button>
                </div>
                {{--<script>
                            async function onSubmitClicked() {

                                $("#send_form").html('Menyimpan...');
                                axios.post('http://homestead.test/supplier/store', {
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
                </script>--}}
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
