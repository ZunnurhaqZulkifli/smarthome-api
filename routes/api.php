<?php

use App\Http\Controllers\Api\LightsControllerApi;
use App\Http\Controllers\Api\LoginControllerApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::post('/login', [LoginControllerApi::class, 'login'])->name('api-login');

Route::prefix('v1')->group(function () {
    Route::get('lights-status', [LightsControllerApi::class, 'checkStatus'])->name('api-lights-status');

    Route::get('lights-off', [LightsControllerApi::class, 'turnOff'])->name('api-lights-off');
    Route::get('lights-on', [LightsControllerApi::class, 'turnOn'])->name('api-lights-on');
});