<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\AuthorController;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\BookRatingController;
use App\Http\Controllers\Api\UserTrackingController;
use App\Http\Controllers\Api\ReadLaterController;
use App\Http\Controllers\Api\ReadController;

Route::apiResource('reads', ReadController::class);
Route::apiResource('read-laters', ReadLaterController::class);
Route::apiResource('user-trackings', UserTrackingController::class);
Route::apiResource('book-ratings', BookRatingController::class);
Route::apiResource('books', BookController::class);
Route::post('searchbook', [BookController::class,'searchbook']);

Route::apiResource('users', UserController::class);
Route::post('login', [UserController::class, 'login']);

Route::apiResource('categories', CategoryController::class);
Route::apiResource('authors', AuthorController::class);
Route::apiResource('admins', AdminController::class);
Route::post('/admin/login',[AdminController::class, 'login']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


