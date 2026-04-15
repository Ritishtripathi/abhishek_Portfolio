<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/contact', [WebsiteController::class,'contact'])->name('contact');
Route::get('/about-us', [WebsiteController::class,'about'])->name('about');
Route::get('/book-session', [WebsiteController::class,'booksession'])->name('booksession');
Route::get('/skills-training', [WebsiteController::class,'training'])->name('training');