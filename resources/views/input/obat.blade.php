@php
$type="input-branchhead";
@endphp
@extends('layouts.logged')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Tambah / Edit Data Obat</div>

                <div class="card-body">

                    <form id="formMedicine">
                            <label for="kodeObat">Kode Obat</label>
                        <div class="input-group mb-3">
                        <select id="kodeUpdate" onChange="onKodeUpdateChanged();" class="form-control">
                        <option value="0">Pilih Kode</option>
                        @foreach($medicine as $sp)
                                <option value="{{$sp->id}}">({{$sp->id}}) {{$sp->namaobat}}</option>
                                @endforeach
                            </select>
  <input type="text" class="form-control"  placeholder="Kode Obat" aria-label="Kode Obat" id="kodeObat" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <button onclick="onBrowseClicked();" class="btn btn-outline-secondary" id="browse" type="button">Pilih</button>
  </div>
  <script>
function onKodeUpdateChanged(){
    // Make a request for a user with a given ID
    var id = $("#kodeUpdate").val();
axios.get('/view/obat/search/id/'+ id)
  .then(function (response) {
    // handle success
    $("#namaObat").val(response.data.namaobat);
    $("#supplier").val(response.data.supplying.id_supplier);
    $("#stokObat").val(response.data.stok);
    $("#harga").val(response.data.harga);
    $("#satuan").val(response.data.satuan);
  
    })
  .catch(function (error) {
    // handle error
    console.log(error);
  })
  .finally(function () {
    // always executed
  });
}
  function onBrowseClicked(){
      
   $("#kodeObat").toggle();
   $("#kodeUpdate").toggle();
  }
  </script>
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
                            <button type="submit"  id="send_form" class="btn btn-outline-success mr-2">Simpan</button>
                            <button type="submit" id="edit_form" class="btn btn-outline-info mr-2">Edit</button>                
                          </div>
                        <script>
                        function onUpdateClicked(){

                        }
                            jQuery(document).ready(function () {
                                $("#kodeUpdate").hide();
                                
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
                                                toastr.error(error, 'Gagal Menyimpan');

                                                $("#send_form").html('Simpan');
                                              console.log(error);
                                            });
                                });


                                jQuery('#edit_form').click(function (e) {
                                    e.preventDefault();
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                        }
                                    });
                                    $("#edit_form").html('Menyimpan...');
                                    axios.post('/input/obat/update', {
                                        id: jQuery('#kodeUpdate').val(),
                                        id_medicine: jQuery('#kodeObat').val(),
                                        branch_id: '{{$cabang->id}}',
                                        namaobat: jQuery('#namaObat').val(),
                                        id_supplier: jQuery('#supplier').val(),
                                        satuan: jQuery('#satuan').val(),
                                        harga: jQuery('#harga').val(),
                                        
                                        stok: jQuery('#stokObat').val()

                                    })
                                            .then(function (response) {
                                                console.log(response);
                                                $("#edit_form").html('Edit');
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
                                                toastr.error(error, 'Gagal Menyimpan');
                                                //$("#send_form").html('Simpan',"error");
                                                console.log(error);
                                                $("#edit_form").html('Edit');
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
