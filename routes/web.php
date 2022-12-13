<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Auth;


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

Route::get('/post/{id}', [HomeController::class, 'show']);

Route::get('/home', [HomeController::class, 'index']);



Auth::routes();

Route::prefix('users')->middleware(['auth'])->group(function () {
    Route::get('documents', [HomeController::class, 'documents']);
    Route::get('/reset_password', [DashboardController::class, 'show_reset_password']);
    Route::post('/reset_password/{user_name}', [DashboardController::class, 'reset_password']);
});

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::post('create_post', [DashboardController::class, 'store_post']);
    Route::post('create_user', [DashboardController::class, 'store_user']);

    Route::get('edit_post/{id}', [DashboardController::class, 'edit_post']);
    Route::post('update_post/{id}', [DashboardController::class, 'update_post']);

    Route::delete('delete_post/{id}', [DashboardController::class, 'delete_post']);
    Route::delete('delete_user/{id}', [DashboardController::class, 'delete_user']);
});

// Comment
Route::post('comments', [App\Http\Controllers\CommentController::class, 'store']);
Route::post('delete-comment', [App\Http\Controllers\CommentController::class, 'destroy']);
