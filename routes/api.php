<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    ApiTokenController,
    UserController,
};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/get/token', [ApiTokenController::class, 'getToken']);

// AUTH ROUTES
Route::group(['middleware' => 'api_auth'], function () {

    Route::post('/social-login', [UserController::class, 'socialLogin']);
    Route::post('/login', [UserController::class, 'login']);
    Route::post('/resend-otp', [UserController::class, 'resendOtp']);
    Route::post('/verify-otp', [UserController::class, 'verifyOtp']);
    Route::get('/user', [UserController::class, 'getUser']);
    Route::post('/update-profile', [UserController::class, 'updateProfile']);
    Route::get('/logout', [UserController::class, 'logout']);
});
