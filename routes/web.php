<?php

use App\Http\Controllers\UserController;
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

Route::get('/',[UserController::class,'index']);
Route::post('/login',[UserController::class,'login']);
Route::get('/create',[UserController::class,'show_create']);
Route::post('/create',[UserController::class,'create']);
Route::get('/list',[UserController::class,'view']);
Route::get('/staff/del/{id}',[UserController::class,'del']);
Route::get('/staff/edit/{id}',[UserController::class,'edit']);
Route::post('/staff/update/{id}',[UserController::class,'update']);