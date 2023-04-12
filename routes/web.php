<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\alternatifController;
use App\Http\Controllers\kriteriaController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\userController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [homeController::class, 'index']);
Route::get('/alternatif', [alternatifController::class, 'index'])->name('alternatif');
Route::get('/alternatif/detail/{id_alt}', [alternatifController::class, 'detail']);
Route::get('/alternatif/add', [alternatifController::class, 'add']);
Route::post('/alternatif/insert', [alternatifController::class, 'insert']);
Route::get('/alternatif/edit/{id_alt}', [alternatifController::class, 'edit']);
Route::post('/alternatif/update/{id_alt}', [alternatifController::class, 'update']);
Route::get('/alternatif/delete/{id_alt}', [alternatifController::class, 'delete']);

Route::get('/kriteria', [kriteriaController::class, 'index'])->name('kriteria');
Route::get('/kriteria/add', [kriteriaController::class, 'add']);
Route::post('/kriteria/insert', [kriteriaController::class, 'insert']);

Route::get('/user', [userController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [loginController::class, 'index']);

Route::post('/login', [loginController::class, 'login'])->name("login");
