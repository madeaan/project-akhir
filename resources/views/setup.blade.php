@extends('master')
@section('title', 'Set Up')

@section('script')
<script src="path/to/jquery.min.js"></script> <!-- Hanya jika Anda menggunakan jQuery -->
<script src="path/to/script.js"></script>
@endsection

@section('style')
    <style>
    body{
        background-color: #E6E8DA;
    }
        {
    font-family: Arial, sans-serif;
    text-align: center;
    margin: 100px;
    }

    .volume-slider {
    display: flex;
    align-items: center;
    justify-content: center;
    }

    .slider {
    width: 200px;
    margin: 0 10px;
    }

    #volume-label {
    font-size: 18px;
    }
    </style>

@endsection

@section('content')
<div style="background-color:#E6E8DA;">

    <br>
    <br>

    <div class= "text-center">
        <h1>Set Up</h1>
    </div>

    <div class="d-flex flex-row align-items-center">

        <div class="d-flex flex-column col-6 my-auto" id="sliderVolume">
            <div class="container mt-5">
                <div class="">
                    <div class="col-md-6">
                        <h5 class="tex-center">Temperature (°C)</h5>
                        <div class="volume-slider">
                            <input type="range" min="0" max="100" value="50" class="slider" id="volume-control">
                            <span id="volume-label">50°C</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h5>Humidity (%)</h5>
                        <div class="volume-slider">
                            <input type="range" min="0" max="100" value="50" class="slider" id="volume-control">
                            <span id="volume-label">50%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column col-6 my-auto">
            <div class="container text centermt-5">
                <form>
                    <div class="mb-3">
                        <label for="berat-masuk" class="form-label">Berat daun Kelor Masuk (kg)</label>
                        <input type="text" class="form-control" id="berat-masuk" placeholder="Input">
                    </div>
                    <div class="mb-3">
                        <label for="berat-keluar" class="form-label">Berat daun Kelor Keluar (kg)</label>
                        <input type="text" class="form-control" id="berat-keluar" placeholder="Input">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>


        </div>

    </div>


</div>
@endsection
