<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\LoginController;
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
Route::post('/proses', [LoginController::class, 'proses'] );
// Route::post('/alumni/create', 'AlumniController@store');
Route::post('/alumni/create', [AlumniController::class, 'store']);
Route::get('/home', [AlumniController::class, 'index']);
Route::get('alumni',[AlumniController::class, 'alumni'])->name('alumni');
Route::get('/qs', function() {
    return view('kuis');
});