<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
});

// hello rubin maharjan
// hello RObin Mahrjan

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/create', [CategoryController::class, 'create']);
Route::post('/category', [CategoryController::class, 'store']);
Route::post('/category/{slug}', [CategoryController::class, 'update']);
Route::get('/category/{slug}', [CategoryController::class, 'edit']);
Route::delete('/category/{slug}', [CategoryController::class, 'destroy']);

Route::get('/account', function () {
    return view('pages.account');
});
