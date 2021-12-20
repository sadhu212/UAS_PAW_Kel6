<?php

use Illuminate\Support\Facades\Route;
use illuminate\Support\Facades\Auth;
use App\Http\Controllers\MoneyReportController;
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

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Route::get('/', [App\Http\Controllers\MainController::class, 'index', 'index2'])->name('landing');

Route::get('/visi', function () {
    return view('profil/Visimisi');
});

Route::get('/struktur', function () {
    return view('profil/struktur');
});

Route::get('/term', function () {
    return view('/term');
});



Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('verified');


Route::resource('users', \App\Http\Controllers\UserController::class)
    ->middleware('verified');





// LaporanKeuangan
// Route::get('file-upload', [FileUploadController::class, 'fileUpload'])->name('file.upload');
// Route::post('file-upload', [FileUploadController::class, 'fileUploadPost'])->name('file.upload.post');

Route::resource('file', \App\Http\Controllers\MoneyReportController::class)
    ->middleware('checkRole:admin,Customer');

Route::POST('/laporankeuangan',  'App\Http\Controllers\MoneyReportController@store');

Route::get('/laporankeuangan', 'App\Http\Controllers\MoneyReportController@halaman');

Route::get('/moneyreport', 'App\Http\Controllers\MoneyReportController@halaman');

Route::get('export', [MoneyReportController::class, 'export'])->name('export');

//LaporanBerita
Route::get('/berita', 'App\Http\Controllers\NewsController@halaman');

Route::resource('news', \App\Http\Controllers\NewsController::class)
    ->middleware('auth')
    ->middleware('checkRole:admin,Customer');


//Gambar
Route::resource('images', \App\Http\Controllers\ImageController::class)
    ->middleware('auth')
    ->middleware('checkRole:admin,Customer');

Route::get('/gambar', 'App\Http\Controllers\ImageController@halaman');
