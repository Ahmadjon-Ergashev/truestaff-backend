<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::post('/admin/login', [ApiController::class, 'login']);

Route::get('/content', [ApiController::class, 'getContent']);
Route::post('/content', [ApiController::class, 'updateContent']);

Route::post('/contact', [ApiController::class, 'submitInquiry']);

Route::get('/images', [ApiController::class, 'getImages']);
Route::post('/images', [ApiController::class, 'updateImage']);
