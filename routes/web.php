<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/allBlog',[HomeController::class,'showBlog'])->name('allBlog');

Route::get('/admin', [BlogController::class, 'index'])->name('admin')->middleware(['auth', 'verified']);
//blog add form
Route::get('/blogForm',[BlogController::class,'create'])->name('blogForm');
//store blog
Route::POST('/blogStore',[BlogController::class,'store'])->name('blogStore');
//edit blog
Route::get('/editBlog/{id}',[BlogController::class,'edit'])->name('editBlog');
//update blog
Route::POST('/update/{id}',[BlogController::class,'update'])->name('update');
//delete blog
Route::get('/deleteBlog/{id}',[BlogController::class,'distroy'])->name('deleteBlog');
require __DIR__.'/auth.php';
