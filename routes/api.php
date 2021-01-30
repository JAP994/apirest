<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Users\UserController;
use App\Http\Controllers\Api\Blogs\BlogController;
use App\Http\Controllers\Api\Categories\CategoryController;
use App\Http\Controllers\Api\Comments\CommentController;

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

Route::middleware('auth:api','verified')->get('/user', function (Request $request) {
    return $request->user();
});

//usuarios 
    Route::apiResource('users', UserController::class);
//blogs
    Route::apiResource('blogs', BlogController::class);
//categorias
Route::apiResource('categories', CategoryController::class);
//comentarios
Route::apiResource('comments', CommentController::class);
