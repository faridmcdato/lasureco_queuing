<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/v1/users',[\App\Http\Controllers\Admin\Api\UserController::class,'getUsers'])->name('api.users.index');
Route::get('/v1/roles',[\App\Http\Controllers\Admin\Api\RoleController::class,'getRoles'])->name('api.roles.index');
Route::get('/v1/consumers',[\App\Http\Controllers\Admin\Api\ConsumerController::class,'getConsumers'])->name('api.consumers.index');
