@extends('layouts.app')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/table-to-json@0.13.0/lib/jquery.tabletojson.min.js" integrity="sha256-AqDz23QC5g2yyhRaZcEGhMMZwQnp8fC6sCZpf+e7pnw=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel='stylesheet'>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Transaksi</div>

                <div class="card-body">
                    <form id="formSupplier" method="post" action="javascript:void(0)">
                        <fieldset disabled>
                            <div class="form-group">
                                <label for="namaCabang">Cabang</label>
                                <input type="text" id="namaCabang" value="{{ Auth::user()->worker->branch->nama }}" class="form-control" placeholder="Disabled input">
                </div>
                </fieldset>
                
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
                        <select class="form-control" id="namaObat"> </select>
                    </div>
                    <div class="form-group col-md-1">
                        <label for="jumlah">Jumlah</label>
                        <input type="text" class="form-control" id="jumlah" placeholder="ex:10">
                    </div>
                    <div class="form-group col-md-1 pt-2 ml-4">
                        <label></label>
                        <button type="submit" onclick="onAdd();" id="add_form" class="btn btn-outline-success">Tambah</button>
                    </div>
                </div>
                <table id ="productTable" class="table table-responsive-lg table-striped table-hover">
                    <thead class="thead text-light bg-success">
                        <tr>
                            <th scope="col">Kode</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Satuan</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

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
                <script>
                 function onSubmitClicked(){
                    var table = $('#productTable').tableToJSON({
        ignoreColumns: [5]
            });
          var trans = JSON.stringify(table);
          console.log(trans);       
          $("#send_form").html('Menyimpan...');
                                axios.post('http://homestead.test/transaction/add/save', {
                                   
                branch_id: '{{Auth::user()->worker->branch_id}}',
                hash: '{{$hash}}',
                totalbiaya: jQuery('#totalBiaya').val(),
                transaction : trans
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
var items = new Map();
var medicine;
var total=0;
    function onAdd(){
        var qty = $('#jumlah').val();
        if (medicine.stok < qty){
            //if stock kurang
            Command: toastr["error"]("Stok barang hanya " + medicine.stok + ' ' + medicine.satuan , "Kesalahan")

toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": true,
  "progressBar": false,
  "positionClass": "toast-top-right",
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
}
//end of if stock is kurang
        }
        else if (items.has(medicine.id.toString().replace(/\s/g, ''))){
            Command: toastr["error"]("Barang sudah ditambahkan sebelumnya" , "Kesalahan")

toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": true,
  "progressBar": false,
  "positionClass": "toast-top-right",
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
}
        }
        else{
            //berarti stok ada
            medicine.qty = qty;
            var rowid = medicine.id.toString().replace(/\s/g, '');
        items.set(rowid,medicine);

        $("#productTable tbody").append(
      "<tr id=" + rowid + ">" +
        "<td>" + medicine.id + "</td>" +
        "<td>" + medicine.namaobat + "</td>" +
        "<td>" + medicine.qty + "</td>" +
        "<td>" + medicine.satuan + "</td>" +
        "<td>" + medicine.harga + "</td>" +
        "<td><button type='button' onclick='productDelete(this);' class='btn btn-success btn-sm'>Hapus</button></td>" +
      "</tr>"
  );
  update();
        }

    }

function update(){
  total = 0;
        for (let [k, v] of items) {
            total = total + (v.qty * v.harga);
        }
        $("#totalBiaya").val(total);

}
function productDelete(ctl) {

   var rowid = $(ctl).parents("tr").attr('id');
   if(items.has(rowid)){
       items.delete(rowid);
       console.log("successfuly remove " + rowid + " from maplist");
   }
  $(ctl).parents("tr").remove();
    update();
}
$(document).ready(function(){


  $('#namaObat').select2({
    placeholder: 'Cari...',
    ajax: {
      url: 'http://homestead.test/view/obat/search/branch/{{Auth::user()->worker->branch_id}}',
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
              text: item.namaobat,
              id: item.id,
              branch_id : item.branch_id,
              namaobat : item.namaobat,
              satuan : item.satuan,
              harga : item.harga,
              stok : item.stok
            }
          })
        };
      },
      cache: true
    }
  });

  $('#namaObat').on('select2:select', function (e) {
    var data = e.params.data;
    var myJSON = JSON.stringify(data);
    medicine = JSON.parse(myJSON);
    medicine.qty=0;
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
