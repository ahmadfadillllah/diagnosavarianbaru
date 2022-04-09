<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\KlasifikasiController;
use App\Http\Controllers\SolusiController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home.index');
});

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/post-contact', [HomeController::class, 'postcontact'])->name('postcontact');

Route::get('/gejala', [HomeController::class, 'gejala'])->name('gejala');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/post-login', [AuthController::class, 'postlogin'])->name('postlogin');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/post-register', [AuthController::class, 'postregister'])->name('postregister');

Route::get('/form', [DashboardController::class, 'form'])->name('form');
Route::post('/post-form', [DashboardController::class, 'postform'])->name('postform');
Route::get('/form/gejala/{id}', [DashboardController::class, 'gejala'])->name('form.gejala');
Route::post('/form/proses/cek/{id}', [DashboardController::class, 'konsultasicek'])->name('form.solusi');

Route::group(['middleware' => ['auth', 'checkRole:admin,pakar']], function(){

    Route::get('/dashboard/contact', [HomeController::class, 'cekcontact'])->name('cekcontact');
    Route::get('/dashboard/contact/delete/{id}', [HomeController::class, 'destroycontact']);

    Route::get('/dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/dashboard/index/cetak', [DashboardController::class, 'cetak'])->name('dashboard.cetak');

    Route::get('/dashboard/profile', [ProfilController::class, 'index'])->name('profil.index');
    Route::post('/dashboard/profile/deactive', [ProfilController::class, 'deactive'])->name('profil.deactive');

    //User Admin
    Route::get('/dashboard/users/admin', [UsersController::class, 'admin'])->name('users.admin');
    Route::get('/dashboard/users/admin/{id}', [UsersController::class, 'adminedit']);
    Route::post('/dashboard/users/admin/update/{id}', [UsersController::class, 'adminupdate']);
    Route::get('/dashboard/users/admin/delete/{id}', [UsersController::class, 'admindestroy']);

    //User Pakar
    Route::get('/dashboard/users/pakar', [UsersController::class, 'pakar'])->name('users.pakar');
    Route::get('/dashboard/users/pakar/{id}', [UsersController::class, 'pakaredit']);
    Route::post('/dashboard/users/pakar/update/{id}', [UsersController::class, 'pakarupdate']);
    Route::get('/dashboard/users/pakar/delete/{id}', [UsersController::class, 'pakardestroy']);

    //User Konsultasi
    Route::get('/dashboard/users/konsultasi', [UsersController::class, 'konsultasi'])->name('users.konsultasi');
    Route::get('/dashboard/users/konsultasi/delete/{id}', [UsersController::class, 'konsultasidestroy']);
    Route::get('/dashboard/users/konsultasi/proses/{id}', [UsersController::class, 'konsultasiproses']);
    Route::post('/dashboard/users/konsultasi/proses/cek', [UsersController::class, 'konsultasicek'])->name('users.solusi');

    //Klasifikasi
    Route::get('/dashboard/klasifikasi', [KlasifikasiController::class, 'index'])->name('klasifikasi.index');
    Route::get('/dashboard/klasifikasi/edit/{id}', [KlasifikasiController::class, 'edit']);
    Route::post('/dashboard/klasifikasi/update/{id}', [KlasifikasiController::class, 'update']);

    //Solusi
    Route::get('/dashboard/solusi', [SolusiController::class, 'index'])->name('solusi.index');
    Route::get('/dashboard/solusi/edit/{id}', [SolusiController::class, 'edit']);
    Route::post('/dashboard/solusi/update/{id}', [SolusiController::class, 'update']);

    //Gejala
    Route::get('/dashboard/gejala', [GejalaController::class, 'index'])->name('gejala.index');
    Route::post('/dashboard/gejala/store', [GejalaController::class, 'store'])->name('gejala.store');
    Route::get('/dashboard/gejala/delete/{id}', [GejalaController::class, 'destroy']);
    Route::get('/dashboard/gejala/edit/{id}', [GejalaController::class, 'edit']);
    Route::post('/dashboard/gejala/update/{id}', [GejalaController::class, 'update']);
});


