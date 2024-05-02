<?php

use App\Http\Controllers\AdvertisementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;

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

// rotte revisore
Route::get('/revisor/home',[RevisorController::class,'index'])->name('revisor.controller');
Route::patch('/accept/advertisement/{advertisement}',[RevisorController::class,'acceptAdvertisement'])->name('revisor.accept');
Route::patch('/reject/advertisement/{advertisement}',[RevisorController::class,'rejectAdvertisement'])->name('revisor.reject');
