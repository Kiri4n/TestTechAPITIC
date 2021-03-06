<?php

use App\Http\Controllers\indexController;
use App\Http\Controllers\personnageController;
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

Route::get('/', [indexController::class, 'index'])->name('index');
Route::post('/create', [personnageController::class, 'store'])->name('personnage.store');
Route::post('/edit', [personnageController::class, 'edit'])->name('personnage.edit');
Route::post('/delete', [personnageController::class, 'delete'])->name('personnage.delete');
