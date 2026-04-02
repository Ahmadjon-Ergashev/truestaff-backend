<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'status' => 'success',
        'message' => 'Laravel Application is Running on Docker!',
        'php_version' => phpversion(),
        'laravel_version' => app()->version()
    ]);
});