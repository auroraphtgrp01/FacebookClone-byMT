<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/new-feed', [ViewController::class, 'newfeed'])->name('newfeedPage');
Route::get('/', [ViewController::class, 'login'])->name('homepage');
