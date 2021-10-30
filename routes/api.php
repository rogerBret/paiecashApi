<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\HomeController;
use App\Http\Controllers\Api\V1\TestQrcodeController;

Route::get('/', HomeController::class);
Route::get('/qrcodes', [TestQrcodeController::class, 'index']);
Route::get('/qrcode/{id}', [TestQrcodeController::class, 'show']);
Route::post('/qrcode', [TestQrcodeController::class, 'store']);

