@extends('master')
@section('title', 'Data Produk')
@section('content')
<div style="background-color:#E6E8DA;">

    <br><br>
    <div class="text-center">
        <h1>Data Produksi</h1>
    </div>
    <div class="d-flex flex-row justify-content-center min-vh-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Tambahkan elemen canvas untuk grafik -->
                    <canvas id="myChart" width="100" height="100"></canvas>
                </div>
            </div>
        </div>

        <script>
            // Data untuk grafik
            var data = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei'],
                datasets: [{
                    label: 'Penjualan',
                    data: [12, 19, 3, 5, 2],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            };

            // Pengaturan grafik
            var options = {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            };

            // Inisialisasi grafik menggunakan Chart.js
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: data,
                options: options
            });
        </script>
        <div class= "w-60">
            <div class="container text centermt-5">
                <h2>Total Produksi</h2>
            <main class="container">
                <!-- START FORM -->
                <form action='' method='post'>
                 <div class="my-3 p-3 bg-body rounded shadow-sm">
                     <div class="mb-3 row">
                         <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                         <div class="col-sm-10">
                             <input type="number" class="form-control" name='nim' id="nim">
                         </div>
                     </div>
                     <div class="mb-3 row">
                         <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                         <div class="col-sm-10">
                             <input type="text" class="form-control" name='nama' id="nama">
                         </div>
                     </div>
                     <div class="mb-3 row">
                         <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                         <div class="col-sm-10">
                             <input type="text" class="form-control" name='jurusan' id="jurusan">
                         </div>
                     </div>
                     <div class="mb-3 row">
                         <label for="jurusan" class="col-sm-2 col-form-label"></label>
                         <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
                     </div>
                   </form>
                 </div>
                 <!-- AKHIR FORM -->

                 <!-- START DATA -->
                 <div class="my-3 p-3 bg-body rounded shadow-sm">
                         <!-- FORM PENCARIAN -->
                         <div class="pb-3">
                           <form class="d-flex" action="" method="get">
                               <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                               <button class="btn btn-secondary" type="submit">Cari</button>
                           </form>
                         </div>

                         <!-- TOMBOL TAMBAH DATA -->
                         <div class="pb-3">
                           <a href='' class="btn btn-primary">+ Tambah Data</a>
                         </div>

                         <table class="table table-striped">
                             <thead>
                                 <tr>
                                     <th class="col-md-1">No</th>
                                     <th class="col-md-3">NIM</th>
                                     <th class="col-md-4">Nama</th>
                                     <th class="col-md-2">Jurusan</th>
                                     <th class="col-md-2">Aksi</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td>1</td>
                                     <td>1001</td>
                                     <td>Ani</td>
                                     <td>Ilmu Komputer</td>
                                     <td>
                                         <a href='' class="btn btn-warning btn-sm">Edit</a>
                                         <a href='' class="btn btn-danger btn-sm">Del</a>
                                     </td>
                                 </tr>
                             </tbody>
                         </table>

                   </div>
                   <!-- AKHIR DATA -->
             </main>
        </div>
    </div>
</div>
@endsection
