<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ActionController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DmaicProjectController;

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
Route::post('storeAction', [ActionController::class, 'store']);
Route::post('storeResult', [ResultController::class, 'store']);

Route::get('users', function () {
    return response()->json(User::all());
});

Route::post('addProjectMember', [ProjectController::class, 'addProjectMember']);
Route::post('addDmaicMember', [DmaicProjectController::class, 'addProjectMember']);
