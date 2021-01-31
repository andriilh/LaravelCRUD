<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StundentsController;
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



Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

// Students
// Route::get('/students', [StundentsController::class, 'index']);
// Route::get('/students/create', [StundentsController::class, 'create']);
// Route::get('/students/{student}', [StundentsController::class, 'show']);
// Route::post('/students', [StundentsController::class, 'store']);
// Route::delete('/students/{student}', [StundentsController::class, 'destroy']);
// Route::get('/students/{student}/edit', [StundentsController::class, 'edit']);
// Route::patch('/students/{student}', [StundentsController::class, 'update']);

// all in one routes. 
// routes ini hanya bisa dilakukan jika model dan controller dibuat bersamaan pada php artisan.
Route::resource('students', StundentsController::class);