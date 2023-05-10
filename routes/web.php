<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// JS7
use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;
//JS10
use App\Http\Controllers\ArticleController;

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
    return view('welcome');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

#JS7
Route::resource('mahasiswas', MahasiswaController::class);

#JS9 - Latihan
Route::get('mahasiswas/nilai/{Nim}', [MahasiswaController::class, 'khs']);

#JS10 - Praktikum 1
ROute::resource('articles', ArticleController::class);