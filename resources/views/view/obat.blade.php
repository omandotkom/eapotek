@extends('layouts.logged')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lihat Data Obat</div>
                <!-- tulis kode disini-->

                <!--sampai sini-->
                <div class="card-body">
                    <form class="form-inline justify-content-center">
                        <i class="fas fa-search" aria-hidden="true"></i>
                        <input class="form-control form-control-lg w-50" type="text" placeholder="Search" aria-label="Search">
                    </form>
                    <div class="form-group">
                        <label for="kodeCabang">Kode Cabang</label>
                        <select id="kodeCabang" class="form-control col-md-2">
                            <option selected>Pilih ..</option>
                            <option value="1">CBG001</option>
                            <option value="2">CBG002</option>
                            <option value="3">CBG003</option>
                            <option value="4">CBG004</option>
                        </select> 
                    </div>
                    <table class="table table-responsive-lg table-striped">
                        <thead class="thead bg-success">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Kode Obat</th>
                                <th scope="col">Kode Cabang</th>
                                <th scope="col">Kode Supplier</th>
                                <th scope="col">Nama Obat</th>
                                <th scope="col">Satuan</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>BTK01</td>
                                <td>CBG001</td>
                                <td>SPL2109</td>
                                <td>OBH Combi</td>
                                <td>Larutan</td>
                                <td>20</td>
                                <td>Rp 15.000</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>FL01</td>
                                <td>CBG002</td>
                                <td>SPL2124</td>
                                <td>Bodrexin</td>
                                <td>Tablet</td>
                                <td>15</td>
                                <td>Rp 1.000</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>PSG01</td>
                                <td>CBG001</td>
                                <td>SPL2126</td>
                                <td>Paramex</td>
                                <td>Kaplet</td>
                                <td>12</td>
                                <td>Rp 1.500</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>PSG01</td>
                                <td>CBG001</td>
                                <td>SPL2127</td>
                                <td>Paramex</td>
                                <td>Kaplet</td>
                                <td>12</td>
                                <td>Rp 1.500</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>PGL01</td>
                                <td>CBG004</td>
                                <td>SPL2131</td>
                                <td>Koyo</td>
                                <td>Salep</td>
                                <td>50</td>
                                <td>Rp 5.500</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>MTH01</td>
                                <td>CBG003</td>
                                <td>SPL2137</td>
                                <td>Promaag</td>
                                <td>Puyer</td>
                                <td>25</td>
                                <td>Rp 16.500</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
