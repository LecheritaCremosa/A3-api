<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnvironmentTypeController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\LearningEnvironmentController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SchedulingEnvironmentController;
use App\Models\LearningEnvironment;
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
Route::post('auth/login', [AuthController::class, 'login'])->name('auth.login'); 

Route::middleware('auth:sanctum')->group(function () {
    Route::post('auth/logout', [AuthController::class, 'logout'])->name('auth.logout'); 
    Route::apiResource('career', CareerController::class);
    Route::apiResource('course', CourseController::class);
    Route::apiResource('environment_type', EnvironmentTypeController::class);
    Route::apiResource('instructor', InstructorController::class);
    Route::apiResource('learning_environment', LearningEnvironmentController::class);
    Route::apiResource('location',  LocationController::class);
    Route::apiResource('scheduling_environment', SchedulingEnvironmentController::class);
});