<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

// Public Routes (Rate-Limited to prevent Spam/Brute-force)
Route::post('/admin/login', [ApiController::class, 'login'])->middleware('throttle:5,1'); // 1 dakikada max 5 login denemesi
Route::post('/contact', [ApiController::class, 'submitInquiry'])->middleware('throttle:10,1'); // 1 dakikada max 10 mesaj gönderimi

// Public GET Routes (Sitenin ana yüzü için - Normal hızda kalabilir)
Route::get('/content', [ApiController::class, 'getContent']);
Route::get('/images', [ApiController::class, 'getImages']);


// Protected Routes (Sadece giriş yapmış adminler için)
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/content', [ApiController::class, 'updateContent']);
    Route::post('/images', [ApiController::class, 'updateImage']);
    
    // Auth Check (Frontend için oturum kontrolü)
    Route::get('/admin/check', function() {
        return response()->json(['authenticated' => true]);
    });
});
