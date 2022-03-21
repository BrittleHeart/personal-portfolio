<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\API\Admin\CategoriesController;
use App\Http\Controllers\API\Admin\PostsController;
use App\Http\Controllers\API\Admin\RolesController;
use App\Http\Controllers\API\Admin\UsersController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomePageController::class, 'index'])->name('home.index');
Route::get('/download_cv', [HomePageController::class, 'download'])->name('home.download');

// Blog section
Route::get("/blog", [BlogController::class, 'index'])
    ->name('blog.index');

Route::post('/blog/search', [SearchController::class, '__invoke'])->name('blog.search');

Route::get('/blog/wpisy/{post:slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blog/kategoria/{category:name}/wpisy', [BlogController::class, 'categories'])
    ->name('blog.categories');

Route::get('/blog/tags/{tag:name}/posts', [BlogController::class, 'tags'])->name('blog.tags');

Route::middleware('auth')->group(function () {
    Route::controller(AdminController::class)->prefix('admin')->group(function () {
        Route::get('/', 'index');
        Route::get('/{wildcard}', 'index');
        Route::get('/{wildcard}/{current}', 'index');
        Route::get('/{wildcard}/{current}/edit', 'index');
        Route::get('/{wildcard}/{current}/show', 'index');
        Route::get('/{wildcard}/{current}/preview', 'index');
    });

    Route::prefix('api')->group(function () {
        Route::apiResource('/users', UsersController::class);
        Route::apiResource('/posts', PostsController::class);
        Route::put('/post/{post}/publish', [PostsController::class, 'publishPost']);
        Route::put('/post/{post}/unPublish', [PostsController::class, 'unPublishPost']);
        Route::apiResource('/categories', CategoriesController::class);
        Route::apiResource('/roles', RolesController::class);
    });
});
