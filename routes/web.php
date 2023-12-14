<?php

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

Route::get('/', \App\Http\Controllers\HomeController::class)->name('home');

Route::post('memories', [\App\Http\Controllers\MemoryController::class, 'store'])->name('memory.store');
Route::get('memories/{memory}/verify/{hash}', [\App\Http\Controllers\MemoryController::class, 'verify'])->name('memory.verify');
