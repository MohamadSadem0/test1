<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatRoomController;
use App\Http\Controllers\ChatMessageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExplosionController;
use App\Http\Controllers\NotificationController;
use Illuminate\Support\Facades\Route;

Route::post('register', [UserController::class, 'create']);
Route::middleware('auth:api')->group(function () {
    Route::put('user/{id}', [UserController::class, 'update']);
    Route::delete('user/{id}', [UserController::class, 'destroy']);
});
Route::get('user/{id}', [UserController::class, 'show']);
Route::get('crises-fighters', [UserController::class, 'crisesFighters']);
Route::get('civilians', [UserController::class, 'civilians']);