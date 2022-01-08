<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BatteryVoltageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/change/password', [ AuthController::class, 'changePassword']);
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/delete', [AuthController::class, 'delete']);
    Route::get('/profile', [UserController::class, 'profile']);
    Route::get('/battery-voltage', [BatteryVoltageController::class, 'index']);
    Route::patch('/profile', [UserController::class, 'store']);
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/admin/users', [AdminController::class, 'index']);
    
});


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


