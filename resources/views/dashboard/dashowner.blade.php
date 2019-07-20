@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-deck">
                <div class="card shadow">
                    <h4 class="card-header text-center pb-2">Informasi Obat</h4>
                    <img class="card-img-top" src={{ asset('img/dashboard/owner/melihatdataobat.png') }} alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-justify">Informasi Obat adalah sebuah halaman dimana Pemilik Toko akan dapat melihat detail informasi Obat yang tersedia dan dijual pada Cabang E-APOTEK yang dipilih.</p>
                    </div>
                    <a href="{{ route('viewObat',0) }}" class="btn btn-success">Telusuri</a>
                </div>

                <div class="card shadow">
                    <h4 class="card-header text-center pb-2">Informasi Supplier</h4>
                    <img class="card-img-top" src={{ asset('img/dashboard/owner/melihatdatasupplier.png') }} alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-justify">Informasi Supplier adalah sebuah halaman dimana Pemilik Toko akan dapat melihat detail informasi Supplier yang telah be- kerjasama pada E-APOTEK sesuai cabang yang dipilih.</p>
                    </div>
                    <a href="{{ route('viewSupplier',0) }}" class="btn btn-success">Telusuri</a>
                </div>

                <div class="card shadow">
                    <h4 class="card-header text-center px-1 pb-2">Informasi Karyawan</h4>
                    <img class="card-img-top" src={{ asset('img/dashboard/owner/melihatdatakaryawan.png') }} alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-justify">Informasi Karyawan adalah sebuah halaman dimana Pemilik Toko akan dapat melihat detail informasi Karyawan yang bekerja di E-APOTEK sesuai cabang yang dipilih.</p>
                    </div>
                    <a href="{{ route('viewKaryawan',0) }}" class="btn btn-success">Telusuri</a>
                </div>
            </div>




            <div class="card-deck pt-4">
                <div class="card shadow">
                    <h4 class="card-header text-center pb-2">Supply Obat</h4>
                    <img class="card-img-top" src={{ asset('img/dashboard/owner/melihatdatasuplayobat.png') }} alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-justify">Supply Obat adalah sebuah halaman dimana Pemilik Toko akan dapat melihat informasi Obat yang di Supply oleh Supplier pada E-APOTEK sesuai cabang yang dipilih.</p>
                    </div>
                    <a href="{{ route('viewSupplyObat',0) }}" class="btn btn-success">Telusuri</a>
                </div>

                <div class="card shadow">
                    <h4 class="card-header text-center pb-2">Penentuan Gaji</h4>
                    <img class="card-img-top" src={{ asset('img/dashboard/owner/penentuangaji.png') }} alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-justify">Penentuan Gaji adalah sebuah kegiatan penetapan yang dilakukan oleh Pemilik Toko guna mengatur be- saran gaji Karyawan di setiap cabang E-APOTEK sesuai jabatannya.</p>
                    </div>
                    <a href="{{ route('inputSalary',1) }}" class="btn btn-success">Telusuri</a>
                </div>
                <div class="card shadow">
                    <h4 class="card-header text-center pb-2">Laporan</h4>
                    <img class="card-img-top" src={{ asset('img/dashboard/owner/mencetaklaporan.png') }} alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-justify">Laporan adalah sebuah halaman berisi informasi dalam bentuk catatan rincian mulai dari Keuangan, Transaksi, dan Absensi yang dapat ditentukan rentang waktu pengambilan data-Nya.</p>
                    </div>
                    <a onclick="compose(); return false;" href="#" class="btn btn-success">Telusuri</a>
                    <script>
                        function compose() {
                            bootbox.dialog({
                                title: 'Pilih Jarak Tanggal Laporan',
                                message: '<p>Pilih Jarak Tanggal Pelaporan (Per Bulan, Minggu, Hari atau tanggal tertentu)</p>dari<input type="date" id="start" class="form-control"></input>sampai<input type="date" id="sampai" class="form-control"></input>',
                                size: 'large',
                                closeButton: true,
                                centerVertical: true,
                                onEscape: true,
                                backdrop: true,
                                buttons: {
                                    next: {
                                        label: 'Lanjutkan',
                                        className: 'btn-success',
                                        callback: function() {
                                            var dari = $("#start").val();
                                            var sampai = $("#sampai").val();
                                            window.location.replace("/view/report/general/" + dari + "/" + sampai);
                                        }
                                    }
                                }
                            });
                        }
                    </script>
                </div>

            </div>
            <div class="card-deck">

                <div class="card shadow">
                    <h4 class="card-header text-center pb-2">Transaksi</h4>
                    <img class="card-img-top" src={{ asset('img/dashboard/owner/penentuangaji.png') }} alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-justify">Transaksi adalah sebuah kegiatan yang dilakukan oleh pegawai cabang untuk memanipulasi data seperti tanggal , Nama Barang, Jumlah , dan Harga yang ada di E-APOTEK guna menunjang sebuah proses jual beli dengan customer.</p>
                    </div>
                    <a href="#" onclick="composeTransaction(); return false;" class="btn btn-success">Telusuri</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection