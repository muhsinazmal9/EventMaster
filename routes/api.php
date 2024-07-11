<?php

use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\LoginController;

// Authentication routes
Route::post('login', [LoginController::class, 'login']);
Route::post('register', [LoginController::class, 'register']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    // User routes
    Route::get('user', function (Request $request) {
        return success('User retrieved successfully', new UserResource($request->user()));
    });

    // Logout route
    Route::post('logout', [LoginController::class, 'logout']);

    // Event routes
    Route::get('events', [EventController::class, 'getEvents']);
    Route::get('events/{id}', [EventController::class, 'getEvent']);
    Route::post('events', [EventController::class, 'createEvent']);
    Route::put('events/{id}', [EventController::class, 'updateEvent']);
    Route::delete('events/{id}', [EventController::class, 'deleteEvent']);
});
