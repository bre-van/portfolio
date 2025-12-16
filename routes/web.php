<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'about')->name('about');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects');

Route::view('/contact', 'contact')->name('contact');
