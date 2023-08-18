<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/new-feed', [ViewController::class, 'newfeed'])->name('newfeedPage');
Route::get('/', [ViewController::class, 'login'])->name('homepage');
Route::get('/profile/{user_name}', [ViewController::class, 'profile'])->name('profile');
// Route::get('/test', [TestController::class, 'index']);
