<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewUserController;

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

Route::get('/', [NewUserController::class, 'index'])->name('index');
Route::post('/', [NewUserController::class, 'create'])->name('create');
Route::get('/edit/{id}', [NewUserController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [NewUserController::class, 'update'])->name('update');
Route::get('/destroy/{id}', [NewUserController::class, 'destroy'])->name('destroy');
