@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Penentuan Gaji</div>

                <div class="card-body">
                    <form id="formSupplier" method="post" action="javascript:void(0)">
                        {{-- bagian branch, sedang dikerjakan
                        <fieldset disabled>
                            <div class="form-group">
                                <label for="namaCabang">Cabang</label>
                                <input type="text" id="namaCabang" value="{{$cabang->nama}}" class="form-control" placeholder="Disabled input">
                            </div>
                        </fieldset>--}}
                    <div class="form-group">
                        <label for="namaCabang">Cabang</label>
                        <select id="namaCabang" class="form-control col-md-3">
                            <option selected>Semua</option>
                            @foreach($branches as $b)
                            <option value="{{$b->id}}">{{$b->nama}}</option>
                            @endforeach
                        </select> 
                    </div>


                <table class="table table-responsive-lg table-striped">
                    <thead class="thead text-light bg-success">
                        <tr>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Gaji Pokok</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td><div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="rp">Rp</span>
                                    </div>
                                    <input type="text" class="form-control" name="brancHead" id="branchHead" aria-label="branchHead" aria-describedby="rp">
                                </div>
                            </td>
                            <td><button type="submit" onclick="onSubmitClicked();" id="send_form" class="btn btn-outline-success">Simpan</button></td>
                        </tr>
                    </tbody>
                </table>
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
