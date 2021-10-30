<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\HomeController;
use App\Http\Controllers\Api\V1\TestQrcodeController;

Route::get('/', HomeController::class);
Route::get('/qrcode/{id}', [TestQrcodeControllerr::class, 'show']);
Route::post('/qrcode', [TestQrcodeController::class, 'store']);

