<?php

use App\Http\Controllers\JasaController;
use App\Models\PostController;
use App\Http\Controllers\PesananController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

// Route::get('/pesanan', function () {
//     return view('Pesanan', [
//         "title" => "Pesanan"
//     ]);
// });

// Route::get('/jasa', function () {
//     return view('Jasa', [
//         "title" => "Jasa"
//     ]);
// });

Route::get('/about', function () {
    return view('About', [
        "title" => "About",
        "name" => "Cetak YUK!",
        "image" => "cetak.jpeg"
    ]);
});

Route::get('/pesanan', [PesananController::class, 'index']);
Route::get('/jasa', [JasaController::class, 'index']);
// Route::get('/jasa/{slug}', [PostController::class, 'show']);
