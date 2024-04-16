<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

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

Route::get("/", [ContactController::class, 'create'])->name('contact');
Route::post('/', [ContactController::class,'store'])->name('contact');

Route::get("/apropos", [RouteController::class, 'apropos']);
Route::get("/confidalite", [RouteController::class, 'confidalite']);
