<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('TabelaAdm', [ProductController::class, 'TabelaAdm']);
Route::post('/create', [ProductController::class, 'store']);
Route::delete('/TabelaAdm/{id}', [ProductController::class, 'destroy']);
Route::get('TabelaAdm/{id}', [ProductController::class, 'edit']);
Route::put('/update/{id}', [ProductController::class, 'update']);
Route::get('/', [ProductController::class, 'index']);
