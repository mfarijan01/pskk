<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('/login');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [App\Http\Controllers\HomeController::class, 'user'])->name('user');

Route::get('/wisata/Galeri', [App\Http\Controllers\profilController::class, 'a'])->name('Galeri');
Route::get('/wisata/hiburan', [App\Http\Controllers\profilController::class, 'b'])->name('hiburan');
Route::get('/wisata/paket', [App\Http\Controllers\profilController::class, 'c'])->name('paket');
Route::get('/wisata/pemandu', [App\Http\Controllers\profilController::class, 'd'])->name('pemandu');
Route::get('/wisata/Penginapan', [App\Http\Controllers\profilController::class, 'e'])->name('Penginapan');
Route::get('/wisata/Rental', [App\Http\Controllers\profilController::class, 'g'])->name('Rental');
Route::get('/wisata/rincian', [App\Http\Controllers\profilController::class, 'h'])->name('rincian');
Route::get('/wisata/Vidio', [App\Http\Controllers\profilController::class, 'i'])->name('Vidio');
Route::get('/wisata/kontak', [App\Http\Controllers\profilController::class, 'k'])->name('kontak');


Route::get('/profil/Galeri', [App\Http\Controllers\Wisata1Controller::class, 'a'])->name('Galeri');
Route::get('/profil/Hiburan', [App\Http\Controllers\Wisata1Controller::class, 'b'])->name('Hiburan');
Route::get('/profil/Paket', [App\Http\Controllers\Wisata1Controller::class, 'c'])->name('Paket');
Route::get('/profil/Pemandu', [App\Http\Controllers\Wisata1Controller::class, 'd'])->name('Pemandu');
Route::get('/profil/Penginepan', [App\Http\Controllers\Wisata1Controller::class, 'e'])->name('Penginepan');
Route::get('/profil/Rental', [App\Http\Controllers\Wisata1Controller::class, 'g'])->name('Rental');
Route::get('/profil/Rincian-biaya', [App\Http\Controllers\Wisata1Controller::class, 'h'])->name('Rincian-biaya');
Route::get('/profil/Vidio', [App\Http\Controllers\Wisata1Controller::class, 'i'])->name('Vidio');
Route::get('/profil/Kontak', [App\Http\Controllers\Wisata1Controller::class, 'k'])->name('kontak');

Route::get('/admin/galeri', [App\Http\Controllers\AdminController::class,'galeriGet'])->name('admin.galeri.index');
Route::get('/admin/galeri/create', [App\Http\Controllers\AdminController::class,'galeriCreate'])->name('admin/galeri/create');
Route::get('/admin/galeri/edit/{id}', [App\Http\Controllers\AdminController::class,'galeriEdit'])->name('admin.galeri.edit');
Route::post('/admin/galeri-post',[App\Http\Controllers\AdminController::class,'galeriPost'])->name('admin.galeri.post');
Route::get('/admin/galeri/index/delete/{id}', [App\Http\Controllers\AdminController::class,'galeriDel']);