<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;

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

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/about/us',[HomeController::class,'about'])->name('about');
Route::get('/contact/us',[HomeController::class,'contact'])->name('contact');
Route::get('/blogs/us',[BlogController::class,'Blogs'])->name('blogs');
Route::get('/details/{id_id}',[BlogController::class,'details'])->name('details');
Route::get('/category-blogs/{id}',[BlogController::class,'categoryBlog'])->name('category-blog');
