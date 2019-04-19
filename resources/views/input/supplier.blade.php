@extends('layouts.logged')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Tambah / Edit Data Supplier</div>

                <div class="card-body">
                    <form id="formSupplier" method="post" action="javascript:void(0)">
                        <fieldset disabled>
                            <div class="form-group">
                                <label for="namaCabang">Cabang</label>
                                <input type="text" id="namaCabang" value="{{$cabang->nama}}" class="form-control" placeholder="Disabled input">
                            </div>
                        </fieldset>
                        <div class="form-group">
                            <label for="kodeSupplier">Kode Supplier</label>
                            <input type="text" class="form-control" name="kodeSupplier" id="kodeSupplier" placeholder="--">
                        </div>




                        <div class="form-group">
                            <label for="namaSupplier">Nama Supplier</label>
                            <input type="text" class="form-control" name="namaSupplier" id="namaSupplier" placeholder="--">
                        </div>
                        <div class="form-group">
                            <label for="kontak">Kontak</label>
                            <input type="text" class="form-control" name="kontak" id="kontak" placeholder="">
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
                            <button type="submit" id="send_form" class="btn btn-outline-success">Simpan</button>
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
                                    $('#send_form').html('Menyimpan...');
                                    console.log("{{ route('storeSupplier') }}");
                                    jQuery.ajax({
                                        url: "{{ route('storeSupplier') }}",
                                        method: 'post',
                                        data: {

                                            email: jQuery('#email').val(),
                                            branch_id: "{{$cabang->id}}",
                                            nama: jQuery('#namaSupplier').val(),
                                            lokasi: jQuery('#lokasi'),
                                            kontak: jQuery('#kontak').val()
                                        },
                                        success: function (result) {

                                            console.log(result);
                                        }, error: function (XMLHttpRequest, textStatus, errorThrown) {
                                            alert("some error");
                                        }
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
