@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lihat Informasi Supply Obat</div>
                <!-- tulis kode disini-->

                <!--sampai sini-->
                <div class="card-body">
                    <form class="form-inline justify-content-center">
                        <input class="form-control w-50" type="text" placeholder="Cari Note Supply">
                    </form>
                    <div class="form-group">
                        <label for="namaCabang">Cabang</label>
                        <select id="namaCabang" class="form-control col-md-3">
                            <option selected>Semua</option>
                            <option value="1">Bekasi1</option>
                            <option value="2">Bekasi2</option>
                            <option value="3">Purwokerto</option>
                            <option value="4">Yogyakarta</option>
                        </select> 
                    </div>
                    <table class="table table-responsive-lg table-striped">
                        <thead class="thead text-light bg-success">
                            <tr>
                                <th scope="col">Kode Note</th>
                                <th scope="col">Cabang</th>
                                <th scope="col">Supplier</th>
                                <th scope="col">Total Biaya</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">NS001</th>
                                <td>Bekasi</td>
                                <td>Adinda Miftahul Ilmi Habiba</td>
                                <td>Rp 1.500.000</td>
                                <td>26/04/2019</td>
                                <td><button type="button" class="btn btn-success btn-sm">Detail</button></td>
                            </tr>
                            
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
