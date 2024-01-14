<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController as HomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\PostController as AdminPostController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('category/{id}', [HomeController::class, 'category']);
Route::get('post/{id}', [HomeController::class, 'post']);


Route::group(['middleware' => 'notlogined'], function(){
    Route::get('login', [AuthController::class, 'index']);
    Route::post('login/doLogin', [AuthController::class, 'doLogin']);
});
Route::group(['middleware' => 'logined'], function(){
    Route::get('admin', [AdminHomeController::class, 'index']);

    Route::get('logout', [AuthController::class, 'doLogout']);

    Route::get('admin/category', [AdminCategoryController::class, 'index']);
    Route::post('admin/category/getDatatable', [AdminCategoryController::class, 'getDatatable']);
    Route::post('admin/category/doAdd', [AdminCategoryController::class, 'doAdd']);
    Route::post('admin/category/doUpdate/{id}', [AdminCategoryController::class, 'doUpdate']);
    Route::post('admin/category/doDelete', [AdminCategoryController::class, 'doDelete']);
    Route::post('admin/category/getById/{id}', [AdminCategoryController::class, 'getById']);

    Route::get('admin/mypost', [AdminPostController::class, 'index']);
    Route::post('admin/mypost/getDatatable', [AdminPostController::class, 'getDatatable']);
    Route::post('admin/mypost/doAdd', [AdminPostController::class, 'doAdd']);
    Route::post('admin/mypost/doUpdate/{id}', [AdminPostController::class, 'doUpdate']);
    Route::post('admin/mypost/doDelete', [AdminPostController::class, 'doDelete']);
    Route::post('admin/mypost/getById/{id}', [AdminPostController::class, 'getById']);
});

