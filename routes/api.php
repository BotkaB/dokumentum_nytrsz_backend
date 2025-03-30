<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Admin;

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

//Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
 //  return $request->user();
//});
//Route::middleware('auth:sanctum')->get('/users', [UserController::class, 'getUser']);
//Route::middleware('auth:sanctum')->post('/user/update/{id}', [UserController::class, 'update']);


Route::post('/register',[RegisteredUserController::class, 'store']);
Route::post('/login',[AuthenticatedSessionController::class, 'store']);



Route::middleware(['auth:sanctum'])
->group(function () {
    
    /*
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    */
    Route::get('/user', [UserController::class, 'getUser']);
    Route::post('/user/update/{id}', [UserController::class, 'update']);
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']);
});  





  
  Route::middleware(['auth:sanctum', Admin::class])
  ->group(function () {
        Route::get('users', [UserController::class, 'index']);
        Route::post('users', [UserController::class, 'store']);
        Route::put('users/{id}', [UserController::class, 'update']);
        Route::delete('users/{id}', [UserController::class, 'destroy']);
    });


