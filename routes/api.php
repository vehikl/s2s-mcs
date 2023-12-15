<?php

use App\Http\Controllers\IncomingEventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('events', IncomingEventController::class . '@' . 'store');
