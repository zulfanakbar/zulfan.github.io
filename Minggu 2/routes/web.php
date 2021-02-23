<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
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
Route::get('/', function (){
    return view('welcome');
});

Route::get('/', function(){
    echo "Selamat Datang";
});

Route::get('about', function(){
    echo "1941720152 - Moh. Zulfan Akbar";
});

Route::get('/articels/{id}', function($id){
    echo "Halaman Artikel dengan ID $id";
});

Route::get('articels/{id}', function($id){
    echo "Halaman Artikel dengan ID $id";
});
//PRAKTIKUM 2
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articels/{id}', [ArticleController::class, 'articles']);

//PRAKTIKUM 3
// 1. Halaman Home, menampilkan halaman awal website
Route::get('/', [HomeController::class, 'index']);

// 2. Halaman Products menampilkan daftar product ( route prefix)
Route::prefix('category')->group(function () {
    Route::get('/product', [ProductController::class, 'daftarproduct']);
});

// 3. Halaman News menampilkan Daftar berita (route param)
Route::get('/news', [ArticleController::class, 'news']);
Route::get('/news/{string}', [ArticleController::class, 'newsString']);

// 4. Halaman Program menampilkan Daftar Program (route prefix)
Route::prefix('program')->group(function () {
    Route::get('/list', [ProgramController::class, 'daftarprogram']);
});

// 5. Halaman About Us menampilkan About Us (route biasa)
Route::get('/about-us', function(){
    return redirect ('https://www.educastudio.com/about-us');
});

// 6. Halaman Contact Us menampilkan Contact Us (route resource only)
Route::resource('contact', ContactController::class)->only ([
    'index'
    ]);
