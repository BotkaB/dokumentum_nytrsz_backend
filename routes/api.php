<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UgyfelController;
use App\Http\Controllers\UgyfelTipusController;
use App\Http\Controllers\MegvalositasiHelyszinController;
use App\Http\Middleware\Admin;
use App\Http\Middleware\StatisztikaMegtekintoMiddleware;

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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
return $request->user();
});

//Route::middleware('auth:sanctum')->get('/users', [UserController::class, 'getUser']);
Route::middleware('auth:sanctum')->post('/user/update', [UserController::class, 'updateSelf']);


//Route::post('/register',[RegisteredUserController::class, 'store']);
//Route::post('/login',[AuthenticatedSessionController::class, 'store']);


/*
Route::middleware(['auth:sanctum'])
->group(function () {
    
   
    
    Route::get('/user', [UserController::class, 'getUser']);
   Route::post('/user/update/{id}', [UserController::class, 'update']);
   // Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']);
}); 
*/ 







  
  Route::middleware(['auth:sanctum', Admin::class])

  ->group(function () {
        Route::get('users', [UserController::class, 'index']);
        Route::post('users', [UserController::class, 'store']);
        Route::put('users/{id}', [UserController::class, 'updateByAdmin']);
       
       Route::get('ugyfel_tipuses', [UgyfelTipusController::class, 'index']);
       Route::post('ugyfel_tipuses', [UgyfelTipusController::class, 'store']);
       Route::put('ugyfel_tipuses/{id}', [UgyfelTipusController::class, 'update']);

       Route::get('megvalositasi_helyszins', [MegvalositasiHelyszinController::class, 'index']);
       Route::post('megvalositasi_helyszins', [MegvalositasiHelyszinController::class, 'store']);
       Route::put('megvalositasi_helyszins/{id}', [MegvalositasiHelyszinController::class, 'update']);
    });

    Route::middleware(['auth:sanctum', 'dokumentumSzerkeszto'])

    ->group(function () {
         Route::get('ugyfels', [UgyfelController::class, 'index']);
         Route::post('ugyfels', [UgyfelController::class, 'store']);
         Route::put('ugyfels/{id}', [UgyfelController::class, 'update']);
      });

    Route::middleware(['auth:sanctum', 'statisztikaMegtekinto'])
    
    ->group(function () {
        Route::get('users', [UserController::class, 'index']);
    });

