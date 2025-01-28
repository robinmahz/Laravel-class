<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/create', [CategoryController::class, 'create']);
Route::post('/category', [CategoryController::class, 'store']);
Route::post('/category/{slug}', [CategoryController::class, 'update']);
Route::get('/category/{slug}', [CategoryController::class, 'edit']);
Route::delete('/category/{slug}', [CategoryController::class, 'destroy']);


Route::get('/account', [AccountController::class, 'index']);
Route::get('/account/create', [AccountController::class, 'create']);
Route::post('/account', [AccountController::class, 'store']);
Route::get('/account/{account}/edit', [AccountController::class, 'edit']);
Route::patch('/account/{account}', [AccountController::class, 'update']);
Route::delete('/account/{account}', [AccountController::class, 'destroy']);

// Route::resource('account', AccountController::class);
