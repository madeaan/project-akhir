<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProduksiController;
use App\Http\Controllers\produksikelorcontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('login');
});

Route::get('/d', function () {
    return view('daftar');
});

Route::post('/cek', [LoginController::class, 'checkLogin']);

Route::get('/dash', function () {
    return view('dashboard');
});

Route::get('/produk', function () {
    return view('dataproduksi');
});

Route::get('/set', function () {
    return view('setup');
});

Route::get('/termometer', function () {
    return view('termometer');
});

Route::get('/prod', function () {
    return view('productions');
});

// Route::get('/prod', [ProductionController::class, 'index']);
// routes/web.php

// Route::get('/produksi', 'ProduksiController@index');
// Route::get('/produksi/detail/{bulan}', 'ProduksiController@detail');
// Route::get('/produksi/detail/{bulan}/{tanggal}', 'ProduksiController@detailTanggal');


// Route::resource('blog', BlogController::class);
// Route::get('/blog', [BlogController::class, 'index']);

Route::resource('produksi', produksikelorController::class);

// Route::get('/produksi', function () {
//     return Controller('produksikelor');
// });
