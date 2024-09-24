<?php

use App\Http\Controllers\Admin\CoordinateController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\RegionController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'admin'], function (){

    Route::get('', [MainController::class, 'index']);

    Route::resources([
        'region' => RegionController::class,
        'coordinate' => CoordinateController::class,
        'image' => ImageController::class,
        'review' => ReviewController::class,
        'user' => UserController::class
    ]);
});



