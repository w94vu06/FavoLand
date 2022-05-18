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

Route::get('/', [\App\Http\Controllers\TodoController::class, 'index'])
    ->name('index');





//上傳圖片到資料庫
//Route::get('image', [\App\Http\Controllers\ImageUploadController::class, 'index']);
//Route::post('upload', [\App\Http\Controllers\ImageUploadController::class, 'upload']);

