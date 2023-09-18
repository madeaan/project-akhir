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
            // Data produksi contoh (Anda dapat menggantinya dengan data sesuai kebutuhan)
            var dataProduksi = [
                { tanggal: '2023-09-01', produksiBulan: 1000, produksiTanggal: 50 },
                { tanggal: '2023-09-02', produksiBulan: 1050, produksiTanggal: 45 },
                // Tambahkan data produksi lainnya di sini
            ];

            // Fungsi untuk mengisi daftar bulan
            function populateBulanList() {
                var bulanList = document.getElementById('bulanList');
                var uniqueBulan = [...new Set(dataProduksi.map(item => item.tanggal.slice(0, 7)))];

                uniqueBulan.forEach(function (bulan) {
                    var listItem = document.createElement('li');
                    listItem.innerHTML = `<a href="#" onclick="showDetail('${bulan}')">${bulan}</a>`;
                    bulanList.appendChild(listItem);
                });
            }

            // Fungsi untuk menampilkan detail produksi per tanggal
            function showDetail(bulan) {
                var tanggalTable = document.getElementById('tanggalTable');
                var filteredData = dataProduksi.filter(function (item) {
                    return item.tanggal.startsWith(bulan);
                });

                var tableBody = tanggalTable.querySelector('tbody');
                tableBody.innerHTML = '';

                filteredData.forEach(function (item) {
                    var row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${item.tanggal}</td>
                        <td>${item.produksiTanggal}</td>
                    `;
                    tableBody.appendChild(row);
                });
            }

            // Panggil fungsi untuk mengisi daftar bulan saat halaman dimuat
            window.onload = function () {
                populateBulanList();
            };
        </script>

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
            </main>
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <h2>Data Produksi</h2>
                <ul id="bulanList">
                    <!-- Daftar bulan akan ditampilkan di sini -->
                </ul>
                <table id="tanggalTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Produksi per Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data produksi per tanggal akan ditampilkan di sini -->
                    </tbody>
                </table>
            </div>

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

        </div>
    </div>
</div>
@endsection
