<?php

use Illuminate\Support\Facades\Route;



Route::get('/',[\App\Http\Controllers\HomeController::class,'home'])->name('home');
Route::get('/about',[\App\Http\Controllers\HomeController::class,'about'])->name('about');
