<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UsersController;
use App\Models\Gejala;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home.index');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/post-login', [AuthController::class, 'postlogin'])->name('postlogin');

Route::get('/form', [DashboardController::class, 'form'])->name('form');
Route::post('/post-form', [DashboardController::class, 'postform'])->name('postform');

Route::get('/form/{id}/gejala', [DashboardController::class, 'gejala']);

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/post-register', [AuthController::class, 'postregister'])->name('postregister');

Route::get('/dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index');

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
Route::get('/dashboard/users/konsultasi/proses/cek/{id}', [UsersController::class, 'konsultasicek']);


Route::get('/dashboard/gejala', [GejalaController::class, 'index'])->name('gejala.index');
Route::get('/dashboard/gejala/omicron', [GejalaController::class, 'omicron'])->name('gejala.omicron');
Route::get('/dashboard/gejala/delta', [GejalaController::class, 'delta'])->name('gejala.delta');


Route::post('/dashboard/gejala/store', [GejalaController::class, 'store'])->name('gejala.store');
Route::get('/dashboard/gejala/{id}/delete', [GejalaController::class, 'destroy']);
Route::get('/dashboard/gejala/{id}/edit', [GejalaController::class, 'edit']);
Route::post('/dashboard/gejala/{id}/update', [GejalaController::class, 'update']);


