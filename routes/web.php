<?php

use App\Http\Controllers\Api\UsersController;

Route::get('/', function () {
    return response()->json([
        'message' => 'Hello World!',
    ], 200);
});
$student_data = "/gondzik/310568";
Route::get("$student_data/users", UsersController::class . '@index');
Route::get("$student_data/user/{id}", UsersController::class . '@show');
Route::post("$student_data/user", UsersController::class . '@store');
Route::put("$student_data/user/{id}", UsersController::class . '@update');
Route::delete("$student_data/user/{id}", UsersController::class . '@destroy');