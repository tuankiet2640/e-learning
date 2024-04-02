<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

//basic routes
Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [LoginController::class, 'login'])->name('login');

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('/user', [UserController::class, 'show']);
    Route::get('/logout', [LoginController::class, 'logout']);
    Route::put('/user', [UserController::class, 'update']);
    Route::post('/user/password', [UserController::class, 'updatePassword']);
});
