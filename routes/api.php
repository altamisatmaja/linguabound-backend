<?php

use App\Http\Controllers\Api\Moleculs\Mentor\MentorAuthController;
use App\Http\Controllers\Api\Moleculs\Mentor\MentorGMeetController;
use App\Http\Controllers\Api\Moleculs\Mentor\RegisterMentorController;
use App\Http\Controllers\Api\Moleculs\Mentor\MenntorGMeetController;
use App\Http\Controllers\Api\Moleculs\Otp\ForgotPasswordController;
use App\Http\Controllers\Api\Moleculs\Otp\ResetPasswordController;
use App\Http\Controllers\Api\Moleculs\Parent\ProfileAccountParentController;
use App\Http\Controllers\Api\Moleculs\Parent\RegisterParentController;
use App\Http\Controllers\Api\Moleculs\Remaja\LinkedAccountParentConroller;
use App\Http\Controllers\Api\Moleculs\Remaja\ProfileAccountRemajaController;
use App\Http\Controllers\Api\Moleculs\Remaja\RegisterRemajaController;
use App\Http\Controllers\Api\Organism\ExerciseController;
use App\Http\Controllers\Api\Organism\GMeetController;
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

Route::post('password/forgot',[ForgotPasswordController::class,'forgotPassword']);
Route::post('password/reset',[ResetPasswordController::class,'resetPassword']);


Route::middleware(['auth:api'])->group(function () {
    Route::post('logout', [UserAuthController::class, 'logout']);

    Route::get('leaderboard/all', [LeaderboarController::class,'getLeaders']);
    Route::get('leaderboard/parent', [LeaderboarController::class,'getChildLeaders']);
    Route::get('leaderboard/mentor', [LeaderboarController::class,'getLeadersFromMentor']);

    Route::get('exercise', [ExerciseController::class, 'getExercise']);
    Route::get('exercise/state', [ExerciseController::class, 'getReportExercises']);

    Route::get('exercise/start/{bagian_id}/{sub_bagian_id}', [ExerciseController::class, 'startExercise']);
    Route::post('exercise/submit/{bagian_id}/{sub_bagian_id}', [ExerciseController::class, 'submitExercise']);

    Route::post('meet/create', [MentorGMeetController::class,'createMeet']);
    Route::post('meet/publish/{id}', [MentorGMeetController::class,'publishMeet']);
    Route::post('meet/join/{id}', [GMeetController::class,'joinMeet']);

    Route::post('linked', [LinkedAccountParentConroller::class,'linkAccount']);

    Route::post('profile/update/remaja', [ProfileAccountRemajaController::class,'updateProfile']);
    Route::post('profile/update/parent', [ProfileAccountParentController::class,'updateProfile']);
});
