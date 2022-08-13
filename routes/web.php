<?php

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
use App\Http\Controllers\ProductController;

Route::get('TabelaAdm', [ProductController::class, 'TabelaAdm']);
Route::post('/create', [ProductController::class, 'store']);
Route::delete('/TabelaAdm/{id}', [ProductController::class, 'destroy']);
Route::get('TabelaAdm/{id}', [ProductController::class, 'edit']);
Route::put('/update/{id}', [ProductController::class, 'update']);
Route::get('/', [ProductController::class, 'index']);
