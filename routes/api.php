<?php

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users', function (Request $request) {
    $users = \App\Models\User::all();

    return response()->json([
        'message' => 'Users retrieved successfully.',
        'success' => true,
        'status' => 200,
        'data' => UserResource::collection($users),
    ]);
});

Route::get('events', function (Request $request) {
    $events = \App\Models\Event::all();

    return response()->json([
        'message' => 'Events retrieved successfully.',
        'success' => true,
        'status' => 200,
        'data' => \App\Http\Resources\EventResource::collection($events),
    ]);
});
