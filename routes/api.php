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

Route::middleware('auth:api')->group(function () {
    Route::get('/v1/departments', 'DepartmentsController@getDepartments');
    Route::get('/v1/workers', 'WorkersController@getWorkerCards');
    Route::get('/v1/workers/{id}', 'WorkersController@getWorkerById');
    Route::get('/v1/user', 'UserController@getUser');
    Route::post('/v1/user', 'UserController@updateUser');
});
Route::post('/v1/auth/register', 'AuthController@register');
Route::post('/v1/auth/login', 'AuthController@login');
