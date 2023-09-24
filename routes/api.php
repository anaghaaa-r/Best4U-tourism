<?php

use App\Http\Controllers\DestinationController;
use App\Http\Controllers\DestinationPackageController;
use App\Http\Controllers\DubaiSpecialPackageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/add', [DubaiSpecialPackageController::class, 'create']);
Route::post('/edit/{id}', [DubaiSpecialPackageController::class, 'edit']);
Route::delete('/delete/{id}', [DubaiSpecialPackageController::class, 'delete']);

Route::post('/addpackage/{id}', [DestinationPackageController::class, 'createPackage']);
Route::post('/destination/{destinationId}/package/{packageId}/update', [DestinationPackageController::class, 'editPackage']);
Route::delete('/destination/{destinationId}/package/{packageId}/delete', [DestinationPackageController::class, 'deletePackage']);
