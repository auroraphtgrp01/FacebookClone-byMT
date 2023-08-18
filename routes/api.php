<?php

use App\Http\Controllers\APIAuthenticationController;
use App\Http\Controllers\APIFriendRequestController;
use App\Http\Controllers\APIHeaderController;
use App\Http\Controllers\APIProfileControlelr;
use App\Http\Controllers\FacebookNewFeedController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => '/newfeed'], function () {
    Route::post('/data', [FacebookNewFeedController::class, 'data']);
    Route::post('/data-user', [FacebookNewFeedController::class, 'dataUser']);
    Route::post('/get-list-request', [APIFriendRequestController::class, 'GetListRequest']);
    Route::post('/change-react', [FacebookNewFeedController::class, 'changeReact']);
    Route::post('/accept-friend', [FacebookNewFeedController::class, 'acceptFriend']);
    Route::post('/refuse-friend', [FacebookNewFeedController::class, 'refuseFriend']);
    Route::post('/upload-status', [FacebookNewFeedController::class, 'uploadStatus']);
    Route::post('/log-out', [FacebookNewFeedController::class, 'logout']);
});
Route::group(['prefix' => '/authentication'], function () {
    Route::post('/login', [APIAuthenticationController::class, 'login']);
    Route::post('/register', [APIAuthenticationController::class, 'register']);
});
Route::group(['prefix' => '/profile'], function () {
    Route::post('/get-profile', [APIProfileControlelr::class, 'getProfile']);
    Route::post('/add-friend', [APIProfileControlelr::class, 'addFriend']);
    Route::post('/cancel-request', [APIProfileControlelr::class, 'cancelRequest']);
    Route::post('/remove-friend', [APIProfileControlelr::class, 'removeFriend']);
    Route::post('/accept-friend', [APIProfileControlelr::class, 'acceptFriend']);
});
Route::group(['prefix' => '/header'], function () {
    Route::post('/header-data', [APIHeaderController::class, 'header_data']);
});
