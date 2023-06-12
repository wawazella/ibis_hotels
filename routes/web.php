<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tipeController;

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
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/', function () {
    return view('Home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/service/{id}', [tipeController::class, 'detailKamar']);
Route::get('/category', [tipeController::class, 'kamar']);
Route::resource('datakamar', datakamarController::class);
Route::resource('fasilitas', fasilitasController::class);
Route::resource('categorykamar', categorykamarController::class);
Route::resource('tipe', tipeController::class);
 
Route::get('/home', function () {
    return view('home');
});
