@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lihat Informasi Supplier</div>
                <!-- tulis kode disini-->

                <!--sampai sini-->
                <div class="card-body">
                    <form class="form-inline justify-content-center">
                        <input class="form-control w-50" type="text" placeholder="Cari Nama Supplier">
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
                                <th scope="col">Kode</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Nomor HP</th>
                                <th scope="col">Email</th>
                                <th scope="col">Lokasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Bekasi1</td>
                                <td>SPL2109</td>
                                <td>Adinda Miftahul Ilmi Habiba</td>
                                <td>+62 82133155162</td>
                                <td>dindaIlmi88@gmail.com</td>
                                <td>Perum. Taman Gading Blok E10 Jl. Pajajaran RT/RW 09/09, Kecamatan Lain, Kabupaten Cilacap, Jawa Tengah - Indonesia 14022</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Bekasi2</td>
                                <td>SPL2124</td>
                                <td>Hesa Abda Arrasyid</td>
                                <td>+62 85729194007</td>
                                <td>abdahesa@gmail.com</td>
                                <td>Tawang Sari, Kecamatan Mana, Wonosobo, Jawa Tengah - Indonesia 1200</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Bekasi1</td>
                                <td>SPL2126</td>
                                <td>Khalid Abdurrahman</td>
                                <td>+62 81393558430</td>
                                <td>omandotkom@gmail.com</td>
                                <td>Perum. Telaga Harapan Blok D9/4, Kecamatan Cikarang Barat, Kabupaten Bekasi, Jawa Tengah - Indonesia 1945</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Purwokerto</td>
                                <td>SPL2127</td>
                                <td>Lela Sari Kristina</td>
                                <td>+62 85875104418</td>
                                <td>lelasari.kristina@gmail.com</td>
                                <td>Perum. Bandengan Indah A7 RT/RW 01/16, Kecamatan juga, Cilacap, Jawa Tengah - Indonesia 15347</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Yogyakarta</td>
                                <td>SPL2131</td>
                                <td>Muhammad Ilham Hijriyanta</td>
                                <td>+62 85600116266</td>
                                <td>hijriyanta@gmail.com</td>
                                <td>Pakajangan Gang 14 No.46 RT/RW 33/12, Kecamatan Kedungwuni, Kabupaten Pekalongan, Jawa Tengah - Indonesia 14045</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Purwokerto</td>
                                <td>SPL2137</td>
                                <td>Ridwan Risandi</td>
                                <td>+62 89685802629</td>
                                <td>ridwanwanwan72@gmail.com</td>
                                <td>Perum. Bumi Sani Permai Blok B7/8 RT/RW 010/014, Kelurahan Setia Mekar, Kecamatan Tambun Selatan, Kabupaten Bekasi, Jawa Barat - Indonesia 17510</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
