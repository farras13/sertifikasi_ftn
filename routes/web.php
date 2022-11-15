<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

//user no login
Route::get('/beranda', [UserController::class, 'berandanologin']);
Route::get('/produk', [UserController::class, 'produknologin']);

//user
Route::get('/berandauser', [UserController::class, 'index']);
Route::get('/produkuser', [UserController::class, 'produk']);

//admin
Route::get('/berandaadmin', [AdminController::class, 'index']);
Route::get('/datauser', [AdminController::class, 'datauser']);
//admin kategori
Route::get('/kategoribuku', [AdminController::class, 'tampilkategori']);
Route::get('/createkategori', [AdminController::class, 'createkategori'])->name("createkategori");
Route::post('/tambahkategori', [AdminController::class, 'storekategori'])->name("tambahkategori");
Route::get('/editkategori/{id?}', [AdminController::class, 'editkategori'])->name("editkategori");
Route::post('/editkategori/{id}', [AdminController::class, 'updatekategori']);
Route::post('/destroykategori/{id}', [AdminController::class, 'destroykategori']);
//admin databuku
Route::get('/databuku', [AdminController::class, 'tampilbuku']);
Route::get('/createbuku', [AdminController::class, 'createbuku'])->name("createbuku");
Route::post('/tambahbuku', [AdminController::class, 'storebuku'])->name("tambahbuku");
Route::get('/editbuku/{id?}', [AdminController::class, 'editbuku'])->name("editbuku");
Route::post('/editbuku/{id}', [AdminController::class, 'updatebuku']);
Route::post('/destroybuku/{id}', [AdminController::class, 'destroybuku']);
