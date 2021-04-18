<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/reset', [ResetController::class,'reset']);
Route::get('/balance', [BalanceCotroller::class,'show']);
Route::post('/event', [EventController::class,'store']);