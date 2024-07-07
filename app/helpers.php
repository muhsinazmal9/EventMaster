<?php

if (!function_exists('success')) {
    function success(?string $message, $data = null, int $status = 200) : \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'message' => $message,
            'success' => true,
            'status' => $status,
            'data' => $data,
        ]);
    }
}


if (!function_exists('error')) {
    function error(?string $message, $data = null, int $status = 500) : \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'message' => $message,
            'success' => false,
            'status' => $status,
            'data' => $data,
        ]);
    }
}