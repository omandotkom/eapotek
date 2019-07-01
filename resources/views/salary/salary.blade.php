@php
$type="salary";
@endphp
@extends('layouts.logged')

@section('content')
<script>
    function updateSalary(id_position,salary_position){
        console.log("updating " + id_position + " to " + salary_position);
        if (!isNaN(salary_position)){
            //true
            


axios.post('http://homestead.test/input/salary/update', {
    id: id_position,
    salary: salary_position,
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
})
.catch(function (error) {
toastr.error("Gagal menyimpan data", "Kesalahan");
;
console.log(error);
});

        }else{
            //false
            console.log("not a number");
        }
    }
</script>
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
                        <select onchange="onBranchChanged('salary', document.getElementById('namaCabang').value);"  id="namaCabang" class="form-control col-md-3">
                       
                            @foreach($branches as $b)
                            @if($b->id==$branch_id){
                            <option value="{{$b->id}}" selected>{{$b->nama}}</option>

                            }@else{
                            <option value="{{$b->id}}">{{$b->nama}}</option>

                            }
                            @endif

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
                    @foreach($positions as $position)
                        <tr>
                            <td>{{$position->nama}}</td>
                            <td><div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="rp">Rp</span>
                                    </div>
                                    <input type="text" value="{{$position->salary}}"  class="form-control" name="brancHead" id="salary{{$position->id}}" aria-label="branchHead" aria-describedby="rp">
                                </div>
                            </td>
                            <td><button type="submit" onclick="updateSalary({{$position->id}},$('#salary'+'{{$position->id}}').val());" id="send_form" class="btn btn-outline-success">Simpan</button></td>
                        </tr>
                    @endforeach
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
