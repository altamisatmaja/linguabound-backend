<?php

use App\Http\Controllers\Api\Moleculs\Mentor\MentorAuthController;
use App\Http\Controllers\Api\Moleculs\Mentor\RegisterMentorController;
use App\Http\Controllers\Api\Moleculs\Parent\RegisterParentController;
use App\Http\Controllers\Api\Moleculs\Remaja\RegisterRemajaController;
use App\Http\Controllers\Api\Organism\LeaderboarController;
use App\Http\Controllers\Api\Organism\UserAuthController;
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

Route::post('login/mentor', [MentorAuthController::class,'login']);
Route::post('login', [UserAuthController::class,'login']);
Route::post('register/remaja', [RegisterRemajaController::class, 'register']);
Route::post('register/parent', [RegisterParentController::class, 'register']);
Route::post('register/mentor', [RegisterMentorController::class, 'register']);


Route::middleware(['auth:api'])->group(function () {
    Route::get('leaderboard/all', [LeaderboarController::class,'getLeaders']);
    Route::get('leaderboard/position', [LeaderboarController::class,'getUserPosition']);
});
