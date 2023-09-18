@extends('master')
@section('title', 'Dashboard')

@section('script')
        <script>
        alert("Hallo Anda Masuk Di Halaman Dashboard");
        </script>
@endsection

@section('style')
<style>
    .circle {
        width: 270px;
        height: 270px;
        background-color: #7BA644; /* Warna latar belakang */
        border-radius: 50%; /* Membuat lingkaran */
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 50px; /* Ukuran teks dalam lingkaran */
        color: white; /* Warna teks */
        margin: 0 auto; /* Pusatkan lingkaran */
    }
</style>
@endsection

@section('content')
<div style="background-color:#E6E8DA;">

    <br>
    <br>
    <br>
    <br>
    <div class= "text-center">
        <h1>Data Logger</h1>
    </div>

    <div class="text-center">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <h5>Temperature (°C)</h5>
                    <!-- Lingkaran untuk Temperature -->
                    <div class="circle">
                        40°
                    </div>
                </div>
                <div class="col-md-6">
                    <h5>Humidity (%)</h5>
                    <!-- Lingkaran untuk Humidity -->
                    <div class="circle">
                        30%
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <form action="" class="mx-auto w-50">
            @csrf
            <div class="form-group my-2">
                <div class="row justify-content-center">
                    <label for="waktu-produksi" class="d-flex align-items-center" style="max-width: 450px;">
                        <span style="width:20em;"> Waktu Produksi (menit) </span>
                        <input type="text" name="waktu produksi" id="waktu-produksi" placeholder="Waktu Produksi" class="form-control ml-2">
                    </label>
                </div>
            </div>

            <div class="d-flex flex-row min-vh-100 justify-content-center">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group my-2">
                            <div class="input-group">
                                <input class="form-control" type="waktu masuk" name="" id="Waktu Masuk" placeholder="Waktu Masuk">
                                <div class="input-group-append">
                                    <span class="input-group-text">Mulai</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group my-2">
                            <div class="input-group">
                                <input class="form-control" type="waktu keluar" name="" id="Waktu Keluar" placeholder="Waktu Keluar">
                                <div class="input-group-append">
                                    <span class="input-group-text">Selesai</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
