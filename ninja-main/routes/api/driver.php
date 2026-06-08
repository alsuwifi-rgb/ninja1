<?php


Route::middleware(['guest', 'throttle:api'])->group(function () {

    Route::post('auth', \App\Http\Controllers\Api\V1\Driver\Auth\LoginController::class);
    Route::post('forgot-password', \App\Http\Controllers\Api\V1\Driver\Auth\ForgotPasswordController::class);
    Route::post('/verify-otp', \App\Http\Controllers\Api\V1\Driver\Auth\VerifyOtpCodeController::class);
    Route::post('/reset-password', \App\Http\Controllers\Api\V1\Driver\Auth\UpdatePasswordController::class);

});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/user', function () {
        return \App\Http\Resources\Api\Driver\DriverResource::make(auth()->user());
    });
    Route::get('/get-guarantee-users', function () {
        return \Illuminate\Support\Facades\DB::table('users')->select('id','name')->get();
    });
    Route::put('update-password',\App\Http\Controllers\Api\V1\Driver\UpdateCurrentPasswordController::class);
// ATTENDANCE
    Route::post('check-in', [\App\Http\Controllers\Api\V1\Driver\Auth\AttendanceController::class, 'checkIn']);
    Route::post('check-out', [\App\Http\Controllers\Api\V1\Driver\Auth\AttendanceController::class, 'checkOut']);
    Route::get('checked-in-today',[\App\Http\Controllers\Api\V1\Driver\Auth\AttendanceController::class, 'isCheckedIn']);
    Route::get('checked-out-today',[\App\Http\Controllers\Api\V1\Driver\Auth\AttendanceController::class, 'isCheckedOut']);
// REQUESTS
    Route::post('request/{type}', \App\Http\Controllers\Api\V1\Driver\CreateHrRequestController::class);
    Route::get('request/{type}', \App\Http\Controllers\Api\V1\Driver\GetHrRequestController::class);
    Route::get('/request-type/{type}', \App\Http\Controllers\Api\V1\Driver\GetRequestTypesController::class);
// ORDERS
    Route::get('/my-orders', \App\Http\Controllers\Api\V1\Driver\GetMyOrdersController::class);
    Route::get('/current-order', \App\Http\Controllers\Api\V1\Driver\GetCurrentOrdersController::class);
    Route::put('/order/{order}/{status}', \App\Http\Controllers\Api\V1\Driver\UpdateOrderStatusController::class);
// Mechanic
    Route::get('/mechanics',\App\Http\Controllers\Api\V1\Driver\GetAllMechanicsController::class);
});
