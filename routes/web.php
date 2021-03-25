<?php

use App\Http\Controllers\Admin\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HotlineController;
use App\Models\Hotline;

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
//dashboard
Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');

//event
Route::post('/event/store', [DashboardController::class, 'store'])->name('event.store');
Route::put('/event/update/{event:id}', [DashboardController::class, 'update'])->name('event.update');
Route::post('/event/update/edit-date', [DashboardController::class, 'updateEventDate'])->name('edit-date');

//blog
Route::get('/admin/blog', [BlogController::class, 'index'])->name('blog-admin');
Route::get('/admin/blog/create', [BlogController::class, 'create'])->name('blog-admin.create');
Route::get('/admin/blog/edit/{post:pslug}', [BlogController::class, 'edit'])->name('blog-admin.edit');
Route::post('/admin/blog/store', [BlogController::class, 'store'])->name('blog-admin.store');
Route::put('/admin/blog/update/{post:pid}', [BlogController::class, 'update'])->name('blog-admin.update');
Route::delete('/admin/blog/destroy/{post:pid}', [BlogController::class, 'destroy'])->name('blog-admin.destroy');

//hotlines
Route::get('/admin/hotline', [HotlineController::class, 'index'])->name('hotline');
Route::delete('/admin/hotline/destroy/{hotline:id}', [HotlineController::class, 'destroy'])->name('hotline.destroy');

//lannding
Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/blog', [MainController::class, 'blog'])->name('blog');
Route::get('/blog/detail/{blog:pslug}', [MainController::class, 'BlogDetail'])->name('blog.detail');
Route::get('/program-kerja', [MainController::class, 'proker'])->name('program-kerja');
Route::get('/lembaga-mahasiswa', [MainController::class, 'lembaga'])->name('lembaga-mahasiswa');
Route::get('/ukm', [MainController::class, 'ukm'])->name('ukm');
Route::get('/ukm/detail/{ukm:slug}', [MainController::class, 'UkmDetail'])->name('ukm.detail');
Route::get('/paguyuban', [MainController::class, 'paguyuban'])->name('paguyuban');
Route::get('/paguyuban/detail/{paguyuban:slug}', [MainController::class, 'PaguyubanDetail'])->name('paguyuban.detail');
Route::post('/hotline/store', [MainController::class, 'store'])->name('hotline.store');
Route::view('/tentang', 'tentang')->name('tentang');
Route::view('/kontak', 'contact')->name('kontak');
Route::view('/asrama', 'asrama')->name('asrama');

