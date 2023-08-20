<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;



Route::get('/',[\App\Http\Controllers\HomeController::class,'home'])->name('home');
Route::get('/about',[\App\Http\Controllers\HomeController::class,'about'])->name('about');
Route::get('/add-blog',[BlogController::class,'addBlog'])->name('blog.add');
Route::post('/new-blog',[BlogController::class,'newBlog'])->name('blog.new');
Route::get('/manage-blog',[BlogController::class,'manageBlog'])->name('blog.manage');
Route::get('/blog.delete/{id}',[BlogController::class,'deleteBlog'])->name('blog.delete');
