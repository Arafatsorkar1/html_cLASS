<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about/us', [HomeController::class, 'about'])->name('about');
Route::get('/blogs', [BlogController::class, 'blogs'])->name('blogs');
Route::get('/details/{id}', [BlogController::class, 'details'])->name('details');
Route::get('/category-blogs/{id}', [BlogController::class, 'categoryBlog'])->name('category-blog');
