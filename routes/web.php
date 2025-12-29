<?php

use App\Http\Controllers\CareerController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('about');

Route::view('/contact', 'contact')->name('contact');
Route::get('/career', [CareerController::class, 'index'])->name('carreer');
