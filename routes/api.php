<?php

use App\Http\Controllers\Api\Moleculs\Mentor\MentorAuthController;
use App\Http\Controllers\Api\Moleculs\Mentor\RegisterMentorController;
use App\Http\Controllers\Api\Moleculs\Parent\RegisterParentController;
use App\Http\Controllers\Api\Moleculs\Remaja\RegisterRemajaController;
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
route::post('register/remaja', [RegisterRemajaController::class, 'register']);
route::post('register/parent', [RegisterParentController::class, 'register']);
route::post('register/mentor', [RegisterMentorController::class, 'register']);

