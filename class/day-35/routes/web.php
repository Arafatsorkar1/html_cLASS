<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FullNameController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about/us', [HomeController::class, 'about'])->name('about');
Route::get('/blogs', [BlogController::class, 'blogs'])->name('blogs');
Route::get('/details/{id}', [BlogController::class, 'details'])->name('details');
Route::get('/category-blogs/{id}', [BlogController::class, 'categoryBlog'])->name('category-blog');
Route::get('/full-name-form/', [FullNameController::class, 'index'])->name('full-name');
Route::post('/get-full-name', [FullNameController::class, 'getFullName'])->name('get-full-name');
Route::get('/generate-password', [FullNameController::class, 'generatePassword'])->name('generate-password');
Route::post('/get-password', [FullNameController::class, 'getPassword'])->name('get-Password');
