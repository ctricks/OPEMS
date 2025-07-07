<?php

use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\RawAttendanceController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


    Route::POST('/loginAPI', [AuthController::class, 'login']);
    Route::post('/logoutAPI', [AuthController::class, 'logout']);
    Route::post('/testAPI', [RawAttendanceController::class, 'testAPI']);
    Route::post('/insertDTR', [RawAttendanceController::class, 'InsertDTR']);
