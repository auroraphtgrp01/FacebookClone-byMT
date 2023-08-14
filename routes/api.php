<?php

use App\Http\Controllers\FacebookNewFeedController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => '/newfeed'], function () {
    Route::post('/data', [FacebookNewFeedController::class, 'data'])->name('data');
});
