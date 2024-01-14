<?php

use App\Http\Controllers\Api\UsersController;

Route::get('/', function () {
    return response()->json([
        'message' => 'Hello World!',
    ], 200);
});

Route::get('/users', UsersController::class . '@index');
Route::get('/user/{id}', UsersController::class . '@show');
Route::post('/user', UsersController::class . '@store');
Route::put('/user/{id}', UsersController::class . '@update');
Route::delete('/user/{id}', UsersController::class . '@destroy');
