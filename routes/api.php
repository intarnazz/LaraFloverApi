<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


use App\Http\Controllers\ControllersFlovers\Get\Flovers;

use App\Http\Controllers\Users\GetUser;
use App\Http\Controllers\Users\PostUser;



Route::get('/GetFlovers', [Flovers::class, 'floversAll']);

Route::get('/GetFloverImage/{name}', [Flovers::class, 'floverImage']);

Route::get('/GetUser', [GetUser::class, 'index']);

Route::post('/PostLogin', [PostUser::class, 'userLogin']);

Route::post('/PostReg', [PostUser::class, 'userReg']);



