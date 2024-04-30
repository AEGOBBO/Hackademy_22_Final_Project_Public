<?php

use App\Http\Controllers\AdvertisementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'homepage'])->name('home');
Route::get('/categoria/{category}', [PublicController::class, 'categoryShow'])->name('categoryShow');

// CRUD Advertisement
Route::get('/advertisement/create', [AdvertisementController::class, 'create'])->name('advertisement.create');
Route::get('/advertisement/show/{advertisement}', [AdvertisementController::class, 'show'])->name('advertisement.show-detail');
