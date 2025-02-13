<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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


Route::post('/v1/contact', [ContactController::class, 'store']);
Route::get('/v1/contact', [ContactController::class, 'index']);
Route::delete('/v1/contact/{contact}', [ContactController::class, 'destroy']);
Route::put('/v1/contact/{contact}', [ContactController::class, 'update']);
