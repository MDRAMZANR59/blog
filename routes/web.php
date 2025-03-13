<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'index'])->name('home');
// dd(App());
//all bolg home page
Route::get('/home/all-blog',[HomeController::class,'showBlog'])->name('allBlog');
//single blog page
Route::get('home/singleBlog/{id}',[HomeController::class,'singleblog'])->name('singleBlog');
//index page
Route::get('/admin/blogs', [BlogController::class, 'index'])->name('admin')->middleware(['auth', 'verified']);
//blog add form
Route::get('/admin/addblog',[BlogController::class,'create'])->name('blogForm');
//store blog
Route::POST('/blogStore',[BlogController::class,'store'])->name('blogStore');
//edit blog
Route::get('/admin/editBlog/{id}',[BlogController::class,'edit'])->name('editBlog');
//update blog
Route::POST('/update/{id}',[BlogController::class,'update'])->name('update');
//delete blog
Route::get('/deleteBlog/{id}',[BlogController::class,'destroy'])->name('deleteBlog');
require __DIR__.'/auth.php';
