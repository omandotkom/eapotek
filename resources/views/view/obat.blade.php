@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lihat Informasi Obat</div>
                <!-- tulis kode disini-->

                <!--sampai sini-->
                <div class="card-body">
                    <form class="form-inline justify-content-center">
                        <input class="form-control form-control h-30 w-50" type="text" placeholder="Cari Nama Obat">
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
                                <th scope="col">Cabang</th>
                                <th scope="col">Kode Supplier</th>
                                <th scope="col">Kode Obat</th>
                                <th scope="col">Nama Obat</th>
                                <th scope="col">Satuan</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Bekasi1</td>
                                <td>SPL2109</td
                                <td>BTK01</td>
                                <td>OBH Combi</td>
                                <td>Larutan</td>
                                <td>20</td>
                                <td>Rp 15.000</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Bekasi2</td>
                                <td>SPL2124</td>
                                <td>FL01</td>
                                <td>Bodrexin</td>
                                <td>Tablet</td>
                                <td>15</td>
                                <td>Rp 1.000</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Bekasi1</td>
                                <td>SPL2126</td>
                                <td>PSG01</td>
                                <td>Paramex</td>
                                <td>Kaplet</td>
                                <td>12</td>
                                <td>Rp 1.500</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Purwokerto</td>
                                <td>SPL2127</td>
                                <td>PSG01</td>
                                <td>Procold</td>
                                <td>Kaplet</td>
                                <td>12</td>
                                <td>Rp 1.500</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Yogyakarta</td>
                                <td>SPL2131</td>
                                <td>PGL01</td>
                                <td>Koyo</td>
                                <td>Lainnya</td>
                                <td>50</td>
                                <td>Rp 5.500</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Purwwokerto</td>
                                <td>SPL2137</td>
                                <td>MTH01</td>
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
