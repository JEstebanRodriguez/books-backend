<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;


Route::apiResource('books', BookController::class);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
