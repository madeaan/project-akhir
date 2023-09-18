<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('./css/bootstrap.min.css')}}">
    <title>LOGIIN</title>
    <style>
        .overlay-div{
            height: 100%;
            width: 100%;
            position:absolute;
            background-color: rgba(192,197,163,0.4)
        }
        .btn-primary{
            background: #7BA644;
            border-color: black;
        }
        .btn-primary:hover{
            background: #A7DC64;
            border-color: white;
        }
        .btn-check:checked+.btn, .btn.active, .btn.show, .btn:first-child:active, :not(.btn-check)+.btn:active {
            background: #A7DC64;
            border-color: white;
        }

        body{
            min-height: 100%;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Temukan tombol "MASUK" berdasarkan ID
            var tombolMasuk = document.getElementById('MASUK');

            // Tambahkan event listener untuk mendengarkan klik pada tombol "MASUK"
            tombolMasuk.addEventListener('click', function() {
                // Arahkan pengguna ke halaman /dash (gantilah dengan URL yang sesuai)
                window.location.href = '/dash'; // Ganti '/dash.html' sesuai dengan nama halaman yang Anda inginkan
            });
        });
    </script>


</head>
<body>
    <div class="d-flex flex-row min-vh-100">
        <div id="form" class="d-flex flex-column align-items-center col-6 my-auto">
            <h1>Masuk</h1>
            <form action="/cek" class="mx-auto w-50" method="POST">
                @csrf
                <div class="form-group my-2">
                    <input type="text" name="email" id="" placeholder="Email" class="form-control">
                </div>
                <div class="form-group my-2">
                    <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                </div>
                <div class="form-group my-2 d-grid">
                    <button id="tombolMasuk" class="btn btn-primary">
                        MASUK
                    </button>
                    <script>
                        // Temukan tombol "MASUK" berdasarkan ID
                        var tombolMasuk = document.getElementById('tombolMasuk');

                        // Tambahkan event listener untuk mendengarkan klik pada tombol "MASUK"
                        tombolMasuk.addEventListener('click', function() {
                            // Arahkan pengguna ke halaman /dash (gantilah dengan rute yang sesuai)
                            window.location.href = '/dash';
                        });
                    </script>

                </div>
                <div class="text-center">
                    <h6>Belum Punya Akun?</h6>
                    <a href="/d"><label style="color: blue;" for="Daftar">DAFTAR</label></a>
                </div>
            </form>
        </div>
        <div id="gambar" class="d-flex align-items-center position-relative col-6" style="">
            <div class="overlay-div">

            </div>
            <img src="{{url('/img/kelor2.jpg')}}" alt="" class="mx-auto img-fluid ">

        </div>
    </div>
</body>
</html>
