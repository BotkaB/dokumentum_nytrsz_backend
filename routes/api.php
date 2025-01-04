<?php

use App\Http\Controllers\DokumentumokController;
use App\Http\Controllers\MegvalositasiHelyszinController;
use App\Http\Controllers\UgyfelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::middleware('auth:sanctum')->get('/user', [UserController::class, 'getUser']);
Route::middleware('auth:sanctum')->post('/user/update/{id}', [UserController::class, 'updateUser']);
// Csak admin hozzáférés
Route::middleware(['auth:api', 'role:admin'])->group(function () { 
    Route::get('/admin', function () { 
        return response()->json(['message' => 'Admin Dashboard']); 
    }); 
    Route::get('megvalositasihelyszinek', [MegvalositasiHelyszinController::class, 'index']); 
    Route::get('users', [UserController::class, 'index']); 
    Route::get('users/{id}', [UserController::class, 'show']); 
});

// Dokumentumellenőrző hozzáférés (admin és dokumentumellenőrző)
Route::middleware(['auth:api', 'role:document_checker'])->get('/documents', function () {
    return response()->json(['message' => 'Documents Dashboard']);
    Route::get('dokumentumok', [DokumentumokController::class,'index']);
    Route::get('dokumentumok/{id}', [DokumentumokController::class,'show']);
    Route::get('ugyfelek', [UgyfelController::class,'index']);
    Route::get('ugyfelek/{id}', [UgyfelController::class,'show']);
    
});

// Statisztikai lekérdező hozzáférés (statisztikai lekérdező, dokumentumellenőrző és admin)
Route::middleware(['auth:api', 'role:statistic_viewer'])->get('/statistics', function () {
    return response()->json(['message' => 'Statistics Dashboard']);
});


