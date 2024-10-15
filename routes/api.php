<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\EventController;
use App\Http\Controllers\API\ParticipantController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('events')->get('/events', EventController::class);
Route::apiResource('events.participants', ParticipantController::class)->scoped(['participants' =>'event']);