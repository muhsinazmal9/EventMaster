<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class)->name('index');

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/home', IndexController::class)->name('home');
});

Route::group(['name' => 'events.'], function () {
    Route::get('events', [EventController::class, 'index'])->name('events.index');
});

include_once __DIR__ . '/auth.php';
