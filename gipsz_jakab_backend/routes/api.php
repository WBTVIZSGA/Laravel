<?php

use App\Http\Controllers\IngatlanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/ingatlan',[IngatlanController::class,'index']);
Route::post('/ingatlan',[IngatlanController::class,'store']);
Route::delete('/ingatlan/{id}',[IngatlanController::class,'destroy']);
