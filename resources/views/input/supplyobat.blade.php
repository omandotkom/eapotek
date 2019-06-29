@extends('layouts.logged')

@section('content')
<script>
function check(){
    var chk = document.getElementById("checkEnable");
    
    document.getElementById("idSupply").disabled = (!chk.checked);
    document.getElementById("cariKode").disabled = (!chk.checked);
}
$(document).ready(function(){
        document.getElementById("checkEnable").checked =false;
        document.getElementById("idSupply").disabled = true;
        document.getElementById("cariKode").disabled = true;
    });
</script>
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
                        <label>Kode Supply</label>
                        <div class="input-group">
                            <div class="input-group-prepend"> 
                                <div class="input-group-text">
                                
                                <input type="checkbox" onclick="check();" id="checkEnable" aria-label="Checkbox for following text input"> Enable (untuk update)
                                </div>
                            </div>
                            <input type="text" class="form-control" id="idSupply" aria-describedby="basic-addon2" aria-label="Text input with checkbox">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" id="cariKode" onclick="search();" type="button">Cari Kode</button>
                            </div>
                        </div>

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
                            <button type="submit" onclick="onSubmitClicked();" id="send_form" class="btn btn-outline-success mr-2">Simpan</button>
                            <button type="submit" onclick="onUpdateClicked();" id="edit_form" class="btn btn-outline-info mr-2">Edit</button>                
                            <button type="submit" onclick="onSubmitClicked();" id="delete_form" class="btn btn-outline-danger">Delete</button>
                        </div>
                        <script>
                        function onUpdateClicked(){
                            $("#edit_form").html('Memperbarui...');
                                axios.post('http://homestead.test/input/supplyobat/update', {
                                    id: jQuery('#idSupply').val(),
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
                                            $("#edit_form").html('Edit');
                                        })
                                        .catch(function (error) {
                                            toastr.error("Gagal menyimpan data", "Kesalahan");
                                            $("#edit_form").html('Edit');
                                            console.log(error);
                                        });
                        }
                        function search(){
                            $("#cariKode").html('Mencari...');
                            var url = 'http://homestead.test/input/supplyobat/searchbyid/' + '{{$cabang->id}}' + '/' + $("#idSupply").val();
                            console.log (url);
                                axios.get(url)
                                        .then(function (response) {
                                            console.log(response);
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
                                            $("#namaSupplier").val(response.data.supplier_id);
                                            $("#deskripsi").val(response.data.deskripsi);
                                            $("#totalBiaya").val(response.data.totalbiaya);
                                            $("#tanggal").val(response.data.tanggalsupply);
                                            $("#cariKode").html('Cari Kode');
                                        })
                                        .catch(function (error) {
                                            toastr.error("Data dengan kode tersebut tidak ditemukan", "Kesalahan");
                                            $("#cariKode").html('Cari Kode');
                                            console.log(error);
                                        });    
                        }
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
