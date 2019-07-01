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

                        <div class="form-group">
                            <label for="namaSupplier">Nama Supplier</label>
                            
                            <select class="form-control" name="namaSupplier" id="namaSupplier" placeholder="--"></select>
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
                            <button type="submit" onclick="onUpdateClicked();" id="edit_form" disabled="true" class="btn btn-outline-info mr-2">Edit</button>                
                            <button type="submit" onclick="onDeleteClicked();" id="delete_form" disabled="true" class="btn btn-outline-danger">Delete</button>
                        </div>
                        <script>
                        var id=null;
                        var nama=null;
                        async function onDeleteClicked(){
                            $("#edit_form").html('Memnghapus...');
                                    axios.post('http://homestead.test/input/supplier/delete', {
                                    id : id

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
                                            Command: toastr["success"]("Berhasil menghapus data", "Berhasil");

                                            console.log(response);
                                            $("#delete_form").html('Delete');
                                        })
                                        .catch(function (error) {
                                            toastr.error("Gagal menghapus data", "Kesalahan");
                                            $("#delete_form").html('Delete');
                                            console.log(error);
                                        });   
                        }
                        async function onUpdateClicked(){
                        
                            $("#edit_form").html('Memperbarui...');
                                    axios.post('http://homestead.test/input/supplier/update', {
                                    branch_id: '{{$cabang->id}}',
                                    id : id,
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
                                            $("#edit_form").html('Edit');
                                        })
                                        .catch(function (error) {
                                            toastr.error("Gagal menyimpan data", "Kesalahan");
                                            $("#edit_form").html('Edit');
                                            console.log(error);
                                        });
                        }
                            async function onSubmitClicked() {

                                $("#send_form").html('Menyimpan...');
                                    axios.post('http://homestead.test/supplier/store', {
                                    branch_id: '{{$cabang->id}}',
                                    nama: jQuery("#namaSupplier").val(),
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
<script>
$(document).ready(function(){


$('#namaSupplier').select2({

    tags : true,
    createTag: function (params) {
   
    return {
      id : 0,
      text: params.term
    }
  },
  placeholder: '...',
  ajax: {
    url: 'http://homestead.test/view/supplier/search/branch/{{Auth::user()->worker->branch_id}}',
    dataType: 'json',
    data: function (params) {
          return {
              q: $.trim(params.term)
          };
      },
    delay: 250,
    processResults: function (data) {
      return {
        results:  $.map(data, function (item) {
          return {
            text: item.nama,
            id: item.id,
            branch_id : item.branch_id,
            namasupplier : item.nama,
            alamat : item.alamat,
            telepon : item.telepon,
            email : item.email
          }
        })
      };
    },
    cache: true
  }
});

$('#namaSupplier').on('select2:select', function (e) {
  if (e.params.data.id!=0){
  var data = e.params.data;
  var myJSON = JSON.stringify(data);
  supplier = JSON.parse(myJSON);
  
  $("#kontak").val(supplier.telepon);
  $("#email").val(supplier.email);
  $("#lokasi").val(supplier.alamat);
    id = supplier.id;
    nama = supplier.nama;
  $("#edit_form").attr("disabled",false);
  $("#delete_form").attr("disabled",false);
  $("#send_form").attr("disabled",true);
  }
  else{
    $("#edit_form").attr("disabled",true);
  $("#delete_form").attr("disabled",true);
  $("#send_form").attr("disabled",false);
  }
  //medicine.qty=0;
  /*stok = medicine.stok;
  id = medicine.id;
  namaobat = medicine.namaobat;
  branch_id = medicine.branch_id;
  satuan = medicine.satuan;
  harga = medicine.harga;*/
});

});
</script>
@endsection
