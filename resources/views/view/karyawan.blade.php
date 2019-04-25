@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lihat Informasi Karyawan</div>
                <!-- tulis kode disini-->

                <!--sampai sini-->
                <div class="card-body">
                    <form class="form-inline justify-content-center">
                        <input class="form-control w-50" type="text" placeholder="Cari Nama Karyawan">
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
                        <thead class="thead text-light text-center bg-success">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Cabang</th>
                                <th scope="col">NIK</th>
                                <th scope="col">No. KTP</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No. HP</th>
                                <th scope="col">Jabatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Bekasi1</td>
                                <td>16102109</td>
                                <td>3216102109960009</td>
                                <td>Adinda Miftahul Ilmi Habiba</td>
                                <td>Perum. Taman Gading Blok E10 Jl. Pajajaran RT/RW 09/09, Kecamatan Lain, Kabupaten Cilacap, Jawa Tengah - Indonesia 14022</td>
                                <td>+62 82133155162</td>
                                <td>Apoteker</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Bekasi2</td>
                                <td>16102124</td>
                                <td>3216102124960009</td>
                                <td>Hesa Abda Arrasyid</td>
                                <td>Tawang Sari, Kecamatan Mana, Wonosobo, Jawa Tengah - Indonesia 1200</td>
                                <td>+62 85729194007</td>
                                <td>Apoteker</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Bekasi1</td>
                                <td>16102126</td>
                                <td>3216102126960009</td>
                                <td>Khalid Abdurrahman</td>
                                <td>Perum. Telaga Harapan Blok D9/4, Kecamatan Cikarang Barat, Kabupaten Bekasi, Jawa Tengah - Indonesia 1945</td>
                                <td>+62 81393558430</td>
                                <td>Kepala Cabang</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Purwokerto</td>
                                <td>16102127</td>
                                <td>3216102127960009</td>
                                <td>Lela Sari Kristina</td>
                                <td>Perum. Bandengan Indah A7 RT/RW 01/16, Kecamatan juga, Cilacap, Jawa Tengah - Indonesia 15347</td>
                                <td>+62 85875104418</td>
                                <td>Dokter</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Yogyakarta</td>
                                <td>16102131</td>
                                <td>3216102131960009</td>
                                <td>Muhammad Ilham Hijriyanta</td>
                                <td>Pakajangan Gang 14 No.46 RT/RW 33/12, Kecamatan Kedungwuni, Kabupaten Pekalongan, Jawa Tengah - Indonesia 14045</td>
                                <td>+62 85600116266</td>
                                <td>Kasir</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Purwokerto</td>
                                <td>16102137</td>
                                <td>3216063110960009</td>
                                <td>Ridwan Risandi</td>
                                <td>Perum. Bumi Sani Permai Blok B7/8 RT/RW 010/014, Kelurahan Setia Mekar, Kecamatan Tambun Selatan, Kabupaten Bekasi, Jawa Barat - Indonesia 17510</td>
                                <td>+62 89685802629</td>
                                <td>Kepala Cabang</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
