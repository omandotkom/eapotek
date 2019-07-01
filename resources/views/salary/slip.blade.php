@php
$type="slip-gaji";
@endphp
@extends('layouts.logged')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Slip Gaji</div>

                <div class="card-body">
                    <form id="formSupplier" method="post" action="javascript:void(0)">
                        {{-- bagian branch, sedang dikerjakan
                        <fieldset disabled>
                            <div class="form-group">
                                <label for="namaCabang">Cabang</label>
                                <input type="text" id="namaCabang" value="{{$cabang->nama}}" class="form-control" placeholder="Disabled input">
                </div>
                </fieldset>--}}
                <div class="row">
                    <div class="col-md-6">
                        <fieldset disabled>
                            <div class="form-group col-md-6">
                                <label for="tanggalTransaksi">Tanggal</label>
                                <input type="text" value='{{ date("Y-m-d") }}' class="form-control" id="tanggalTransaksi">
                            </div>
                        </fieldset>
                        <div class="form-row">
                            <div class="form-group ml-3">
                                <label for="periode">Periode</label>
                                <input type="date" id="start" class="form-control">
                            </div>

                            <div class="form-group mx-3 pt-4">
                                <label> _ </label>
                            </div>
                            <div class="form-group pt-2">
                                <label></label>
                                <input type="date" id="end" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group col-md-6">
                            <label for="nik">NIK</label>
                            <select onchange="nikchanged();" id="nik" class="form-control">
                                <option value="0" selected>Pilih</option>
                                @foreach($workers as $b)
                                <option value="{{$b->nik}}">{{$b->nik}}</option>
                                @endforeach
                            </select> 
                        </div>
                        <fieldset disabled>
                            <div class="form-group col-md-auto">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama">
                            </div>
                        </fieldset>
                        <fieldset disabled>
                            <div class="form-group col-md-6">
                                <label for="jabatan">Jabatan</label>
                                <input type="text" class="form-control" id="jabatan">
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <table class="table table-responsive-lg table-striped">
                            <thead class="thead text-light bg-success">
                                <tr class="bg-secondary">
                                    <th scope="col">ABSENSI</th>
                                </tr>
                                <tr>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Hari Masuk</td>
                                    <td id="masuk"></td>
                                </tr>
                        
                                <tr>
                                    <td>Hari Izin</td>
                                    <td id="izin"></td>
                                </tr>
                                <tr>
                                    <td>Hari Alpha</td>
                                    <td id="alpha"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col">                        
                        <table class="table table-responsive-lg table-striped">
                            <thead class="thead text-light bg-success">
                                <tr class="bg-secondary">
                                    <th scope="col">PENDAPATAN</th>
                                </tr>
                                <tr>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Gaji Pokok</td>
                                    <td id="gajipokok"></td>
                                </tr>
                                <tr>
                                    <td>Lembur</td>
                                    <td>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon2">Rp</span>
                                            </div>
                                            <input type="text" class="form-control" id="lembur" aria-label="lembur" aria-describedby="basic-addon2">
                                        </div>
                                    </td>
                                </tr>
                              
                            </tbody>
                        </table>
                    </div>
                    <div class="col">
                        <table class="table table-responsive-lg table-striped">
                            <thead class="thead text-light bg-success">
                                <tr class="bg-secondary">
                                    <th scope="col">POTONGAN</th>
                                </tr>
                                <tr>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Pinjaman</td>
                                    <td>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon2">Rp</span>
                                            </div>
                                            <input type="text" class="form-control" id="jumlahBayar" aria-label="jumlahBayar" aria-describedby="basic-addon2">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hutang</td>
                                    <td>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon2">Rp</span>
                                            </div>
                                            <input type="text" class="form-control" id="hutang" aria-label="hutang" aria-describedby="basic-addon2">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lainnya</td>
                                    <td>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon2">Rp</span>
                                            </div>
                                            <input type="text" class="form-control" id="lainnya" aria-label="lainnya" aria-describedby="basic-addon2">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
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
                <div class="text-right">
                    <button type="submit" onclick="onPrintClicked();" id="send_form" class="btn btn-outline-success">Simpan</button>                
                </div>
                <script>
                function onPrintClicked(){
                    console.log($("#periodestart").val());
                }
                function nikchanged(){
                    console.log("from : " +$("#start").val() + " to " + $("#end").val() );
                    if ($("#nik").val() != "0"){
                        axios.post('http://homestead.test/view/slipgaji/nik',{
                            nik : $("#nik").val(),
                            from : $("#start").val(),
                            to : $("#end").val()
                        })
                            .then(function (response) {
                                // handle success
                                $("#nama").val(response.data.worker.nama);
                                $("#jabatan").val(response.data.worker.position.nama);
                                document.getElementById("gajipokok").innerHTML = response.data.worker.position.salary;
                                document.getElementById("masuk").innerHTML = response.data.masuk;
                                document.getElementById("izin").innerHTML = response.data.izin;
                                document.getElementById("alpha").innerHTML = response.data.alpha;
                                
                                console.log(response);
                            })
                            .catch(function (error) {
                                // handle error
                               
                                console.log(error);
                            })
                            .finally(function () {
                                // always executed
                            });    
                    }else{
                        console.log("cannot view because 0");
                    }
                    

                }
                </script>
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
