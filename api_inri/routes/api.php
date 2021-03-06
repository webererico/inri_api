<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BatteryVoltageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InversoController;
use App\Http\Controllers\PowerController;
use App\Http\Controllers\TotalEnergyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WindDirectionController;
use App\Http\Controllers\WindLateralController;
use App\Http\Controllers\WindTopController;
use App\Models\BatteryVoltage;
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

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/change/password', [AuthController::class, 'changePassword']);
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/delete', [AuthController::class, 'delete']);
    Route::get('/profile', [UserController::class, 'profile']);
    Route::get('/battery-voltage', [BatteryVoltageController::class, 'index']);
    Route::patch('/profile', [UserController::class, 'store']);
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/admin/users', [AdminController::class, 'index']);
    Route::get('/wind/top', [WindTopController::class, 'index']);
    Route::get('/wind/lateral', [WindLateralController::class, 'index']);
    Route::get('/wind/direction', [WindDirectionController::class, 'index']);
    Route::get('/power', [PowerController::class, 'index']);
    Route::get('/energy', [TotalEnergyController::class, 'index']);
    Route::get('/status', [DashboardController::class, 'status']);
    Route::get('/export', [DashboardController::class, 'export']);
    Route::get('/status/inversor', [InversoController::class, 'index']);
    Route::get('/battery-voltage/all', [BatteryVoltageController::class, 'all']);
});


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
