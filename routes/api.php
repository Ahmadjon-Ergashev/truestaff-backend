<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::post('/admin/login', [ApiController::class, 'login']);

Route::get('/content', [ApiController::class, 'getContent']);
Route::post('/content', [ApiController::class, 'updateContent']);

Route::get('/contact', [ApiController::class, 'getInquiries']);
Route::post('/contact', [ApiController::class, 'submitInquiry']);

Route::get('/images', [ApiController::class, 'getImages']);
Route::post('/images', [ApiController::class, 'updateImage']);

Route::get('/domains', [\App\Http\Controllers\Api\WorkDomainController::class, 'index']);
Route::post('/domains', [\App\Http\Controllers\Api\WorkDomainController::class, 'store']);
Route::patch('/domains/{workDomain}', [\App\Http\Controllers\Api\WorkDomainController::class, 'update']);
Route::delete('/domains/{workDomain}', [\App\Http\Controllers\Api\WorkDomainController::class, 'destroy']);

Route::get('/social-links', [\App\Http\Controllers\Api\SocialLinkController::class, 'index']);
Route::post('/social-links', [\App\Http\Controllers\Api\SocialLinkController::class, 'store']);
Route::patch('/social-links/{socialLink}', [\App\Http\Controllers\Api\SocialLinkController::class, 'update']);
Route::delete('/social-links/{socialLink}', [\App\Http\Controllers\Api\SocialLinkController::class, 'destroy']);


