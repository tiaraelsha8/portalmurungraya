<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\COntrollers\MurungrayaController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/murungraya', [MurungrayaController::class, 'index'])->name('murungraya.index');
