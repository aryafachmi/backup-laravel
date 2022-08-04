<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.tampil');
});

Route::get('/rpl1', function () {
    return view('pages.xii-rpl1');
});

// Route::get('/rpl2', function () {
//     return view('pages.xii-rpl2');
// });

Route::get('/tambah', function () {
    return view('pages.tambah');
});

Route::post('/simpanData',[bioController::class,'simpanData']);

Route::get('/rpl2',[bioController::class,'index']);



