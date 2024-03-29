<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Psr7\Request;
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
});
Route::get('/login', [LoginController::class, 'index']);
Route::post('/proses', [LoginController::class, 'proses']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// Route::post('/alumni/create', 'AlumniController@store');
Route::post('/alumni/create', [AlumniController::class, 'store']);
Route::put('/alumni/update/{id}', [AlumniController::class, 'update']);
Route::get('/home', [AlumniController::class, 'index']);
Route::get('alumni', [AlumniController::class, 'alumni'])->name('alumni');
// Route::get('/detail/{id}', [AlumniController::class, 'detail'])->name('detail');
Route::get('user', [UserController::class, 'index'])->name('user');
Route::get('/editUser/{id}', [UserController::class, 'edit'])->name('edit');
Route::get('/deleteUser/{id}', [UserController::class, 'delete'])->name('delete');
Route::get('/tambahUser', [UserController::class, 'create'])->name('tambahUser');
Route::post('/user_store', [UserController::class, 'store'])->name('tambahkan');
Route::put('/user_update/{id}', [UserController::class, 'update'])->name('update');
Route::get('/profile/kusioner', [UserController::class, 'kuis'])->name('kusioner');
Route::get('/profile/{id}', [UserController::class, 'profile'])->name('profile');
// Route::get('/home_user', [UserController::class, 'home'])->name('home_user');
Route::post('/update_foto/{id}', [PhotoController::class, 'update_foto'])->name('update_foto');
