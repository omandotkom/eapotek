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
                        <select id="namaCabang" class="form-control col-md-2">
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
                                <th scope="col">No.</th>
                                <th scope="col">Kode Note</th>
                                <th scope="col">Cabang</th>
                                <th scope="col">Supplier</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Total Biaya</th>
                                <th scope="col">Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>NS001</td>
                                <td>Bekasi</td>
                                <td>Adinda Miftahul Ilmi Habiba</td>
                                <td>OBH Combi 20 botol</td>
                                <td>Rp 1.500.000</td>
                                <td>26/04/2019</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>NS002</td>
                                <td>Bekasi2</td>
                                <td>Hesa Abda Arrasyid</td>
                                <td>Bodrexin 50 botol</td>
                                <td>Rp 5.000.000</td>
                                <td>26/04/2019</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>NS003</td>
                                <td>Bekasi1</td>
                                <td>Khalid Abdurrahman</td>
                                <td>Paramex 100 pcs</td>
                                <td>Rp 3.000.000</td>
                                <td>27/04/2019</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>NS004</td>
                                <td>Purwokerto</td>
                                <td>Lela Sari Kristina</td>
                                <td>Procold 10 pcs</td>
                                <td>Rp 100.000</td>
                                <td>27/04/2019</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>NS005</td>
                                <td>Yogyakarta</td>
                                <td>Muhammad Ilham Hijriyanta</td>
                                <td>Koyo 75 bungkus</td>
                                <td>Rp 2.000.000</td>
                                <td>29/04/2019</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>NS006</td>
                                <td>Purwokerto</td>
                                <td>Ridwan Risandi</td>
                                <td>Promaag 20 pcs</td>
                                <td>Rp 200.000</td>
                                <td>29/04/2019</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
