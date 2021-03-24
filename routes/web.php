<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/',[MainController::class, 'index'])->name('home');
Route::get('/blog',[MainController::class, 'blog'])->name('blog');
Route::get('/blog/detail/{blog:pslug}',[MainController::class, 'BlogDetail'])->name('blog.detail');
Route::get('/program-kerja', [MainController::class, 'proker'])->name('program-kerja');
Route::get('/lembaga-mahasiswa', [MainController::class, 'lembaga'])->name('lembaga-mahasiswa');
Route::get('/ukm', [MainController::class, 'ukm'])->name('ukm');
Route::get('/ukm/detail/{ukm:slug}', [MainController::class, 'UkmDetail'])->name('ukm.detail');
Route::get('/paguyuban', [MainController::class, 'paguyuban'])->name('paguyuban');
Route::get('/paguyuban/detail/{paguyuban:slug}', [MainController::class, 'PaguyubanDetail'])->name('paguyuban.detail');
Route::view('/tentang', 'tentang')->name('tentang');
Route::view('/kontak', 'contact')->name('kontak');
Route::view('/asrama', 'asrama')->name('asrama');
// Route::view('/lembaga-mahasiswa', 'contact')->name('kontak');


