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
