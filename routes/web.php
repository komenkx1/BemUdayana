<?php

use App\Http\Controllers\Admin\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HotlineController;
use App\Http\Controllers\Admin\JurnalController;
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

Auth::routes();
Route::group(['middleware' => ['auth']], function () {

Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');

Route::put('/profile/update/{user:id}', [DashboardController::class, 'profile'])->name('profile.update');
Route::view('/profile', 'admin/profile/index')->name('profile');

//event
Route::post('/event/store', [DashboardController::class, 'store'])->name('event.store');
Route::put('/event/update/{event:id}', [DashboardController::class, 'update'])->name('event.update');
Route::post('/event/update/edit-date', [DashboardController::class, 'updateEventDate'])->name('edit-date');


// route role
Route::group(['middleware' => ['auth','roles:super admin']], function () {
    Route::get('/admin/user', [BlogController::class, 'index'])->name('user');
    Route::put('/admin/user/verif/{user:id}', [BlogController::class, 'verif'])->name('user.update');
    Route::delete('/admin/user/destroy/{user:id}', [BlogController::class, 'destroy'])->name('user.destroy');
});

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

//jurnal
Route::get('/admin/jurnal', [JurnalController::class, 'index'])->name('jurnal');
Route::get('/admin/jurnal/create', [JurnalController::class, 'create'])->name('jurnal.create');
Route::get('/admin/jurnal/edit/{jurnal:id}', [JurnalController::class, 'edit'])->name('jurnal.edit');
Route::post('/admin/jurnal/store', [JurnalController::class, 'store'])->name('jurnal.store');
Route::put('/admin/jurnal/active/{jurnal:id}', [JurnalController::class, 'active'])->name('jurnal.active');
Route::put('/admin/jurnal/nonaktif/{jurnal:id}', [JurnalController::class, 'nonaktif'])->name('jurnal.nonaktif');
Route::put('/admin/jurnal/update/{jurnal:id}', [JurnalController::class, 'update'])->name('jurnal.update');
Route::delete('/admin/jurnal/destroy/{jurnal:id}', [JurnalController::class, 'destroy'])->name('jurnal.destroy');
});

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



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
