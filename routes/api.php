<?php

use App\Http\Controllers\API\Admin\CategoriesController;
use App\Http\Controllers\API\Admin\PostsController;
use App\Http\Controllers\API\Admin\UsersController;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::apiResource('/users', UsersController::class);
Route::apiResource('/posts', PostsController::class);

Route::apiResource('/categories', CategoriesController::class);
