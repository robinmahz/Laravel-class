<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
});

// hello rubin

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/create', [CategoryController::class, 'create']);
Route::post('/category', [CategoryController::class, 'store']);
Route::post('/category/{slug}', [CategoryController::class, 'update']);
Route::get('/category/{slug}', [CategoryController::class, 'edit']);

Route::get('/account', function () {
    return view('pages.account');
});
