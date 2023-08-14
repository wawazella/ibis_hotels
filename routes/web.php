<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
Route::get('/login', [AuthController::class, 'loginForm'])->name('admin.login');
Route::post('/login/store', [AuthController::class, 'login'])->name('admin.login.store');

Route::get('/service/{id}', [tipeController::class, 'detailKamar']);
Route::get('/category', [tipeController::class, 'kamar']);
Route::resource('datakamar', datakamarController::class);
Route::resource('fasilitas', fasilitasController::class);
Route::resource('categorykamar', categorykamarController::class);
 
Route::get('/home', function () {
    return view('home');
});
