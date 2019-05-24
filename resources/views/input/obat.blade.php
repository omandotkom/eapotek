@extends('layouts.logged')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Tambah / Edit Data Obat</div>

                <div class="card-body">

                    <form id="formMedicine">
                        <div class="form-group">
                            <label for="kodeObat">Kode Obat</label>
                            <input type="text" class="form-control" id="kodeObat" placeholder="BTK2">
                        </div>
                        <div class="form-group">
                            <label for="namaObat">Nama Obat</label>
                            <input type="text" class="form-control" id="namaObat" placeholder="OBH Combine">
                        </div>

                        <div class="form-group">
                            <label for="namaObat">Supplier</label>
                            <select id="supplier" class="form-control">
                                @foreach($supplier as $sp)
                                <option value="{{$sp->id}}">{{$sp->nama}}</option>
                                @endforeach


                            </select>   
                        </div>
                        <div class="form-group">
                            <label for="inputState">Satuan</label>
                            <select id="satuan" class="form-control">
                                <option value="Tablet">Tablet</option>
                                <option value="Kapsul">Kapsul</option>
                                <option value="Kaplet">Kaplet</option>
                                <option value="Puyer">Puyer</option>
                                <option value="Larutan">Larutan</option>
                                <option value="Suspensi">Suspensi</option>
                                <option value="ELiksir">Eliksir</option>
                                <option value="Injeksi">Injeksi</option>
                                <option value="Infus">Infus</option>
                                <option value="Salep">Salep</option>
                                <option value="Satuan Lain">Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="hargaObat">Harga Obat / Satuan</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                </div>
                                <input type="text" id="harga" class="form-control" aria-label="Default"  placeholder="32.000" aria-describedby="inputGroup-sizing-default">
                            </div>   
                        </div>
                        <div class="form-group">
                            <label for="stokObat">Stok Obat</label>
                            <input type="text" class="form-control" id="stokObat" placeholder="">
                        </div>
                        <div class="text-right">
                            <button type="submit"  id="send_form" class="btn btn-outline-success">Simpan</button>
                            <button type="submit" onclick="onSubmitClicked();" id="edit_form" class="btn btn-outline-success mr-2">Edit</button>                
                            <button type="submit" onclick="onSubmitClicked();" id="delete_form" class="btn btn-outline-success mr-2">Delete</button>
                        </div>
                        <script>
                            jQuery(document).ready(function () {
                                jQuery('#send_form').click(function (e) {
                                    e.preventDefault();
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                        }
                                    });
                                    $("#send_form").html('Menyimpan...');
                                    axios.post('http://homestead.test/input/obat/store', {
                                        id: jQuery('#kodeObat').val(),
                                        id_medicine: jQuery('#kodeObat').val(),
                                        branch_id: '{{$cabang->id}}',
                                        namaobat: jQuery('#namaObat').val(),
                                        id_supplier: jQuery('#supplier').val(),
                                        satuan: jQuery('#satuan').val(),
                                        harga: jQuery('#harga').val(),
                                        email: jQuery('#email').val(),
                                        stok: jQuery('#stokObat').val()

                                    })
                                            .then(function (response) {
                                                console.log(response);
                                                $("#send_form").html('Simpan');
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
                                            })
                                            .catch(function (error) {
                                                //$("#send_form").html('Simpan',"error");
                                                console.log(error);
                                            });
                                });
                            });






                        </script>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
