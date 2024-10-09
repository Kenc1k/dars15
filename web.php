<?php


use App\Routes\Route;
use App\Controllers\CategoryController;

Route::get("/" , [CategoryController::class, 'index']);
Route::get('/test' , [CategoryController::class, 'index']);
Route::get('/about' , [CategoryController::class, 'index']);
Route::get('/about' , [CategoryController::class, 'index']);