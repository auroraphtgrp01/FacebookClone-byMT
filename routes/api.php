<?php

use App\Http\Controllers\APIFriendRequestController;
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
});
