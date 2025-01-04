<?php

use App\Http\Controllers\DokumentumokController;
use App\Http\Controllers\MegvalositasiHelyszinController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::middleware('auth:sanctum')->get('/user', [UserController::class, 'getUser']);
Route::middleware('auth:sanctum')->post('/user/update/{id}', [UserController::class, 'updateUser']);
// Csak admin hozzáférés
Route::middleware(['auth:api', 'role:admin'])->get('/admin', function () {
    return response()->json(['message' => 'Admin Dashboard']);
    Route::get('/megvalositasihelyszinek', [MegvalositasiHelyszinController::class,'index']);
});

// Dokumentumellenőrző hozzáférés (admin és dokumentumellenőrző)
Route::middleware(['auth:api', 'role:document_checker'])->get('/documents', function () {
    return response()->json(['message' => 'Documents Dashboard']);
    Route::get('/dokumentumok', [DokumentumokController::class,'index']);
    Route::get('/dokumentumok/{id}', [DokumentumokController::class,'show']);
});

// Statisztikai lekérdező hozzáférés (statisztikai lekérdező, dokumentumellenőrző és admin)
Route::middleware(['auth:api', 'role:statistic_viewer'])->get('/statistics', function () {
    return response()->json(['message' => 'Statistics Dashboard']);
});


