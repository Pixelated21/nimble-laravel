<?php

use App\Http\Controllers\API\V1\AssignmentController;
use App\Http\Controllers\API\V1\AssignmentTypeController;
use App\Http\Controllers\API\V1\CourseController;
use App\Http\Controllers\API\V1\CourseTypeController;
use App\Http\Controllers\API\V1\DepartmentController;
use App\Http\Controllers\API\V1\StudentController;
use Illuminate\Support\Facades\Route;

Route::apiResource('courses', CourseController::class);
Route::apiResource('course-types', CourseTypeController::class);
Route::apiResource('departments', DepartmentController::class);
Route::apiResource('students', StudentController::class);
Route::apiResource('assignments', AssignmentController::class);
Route::apiResource('assignment-types', AssignmentTypeController::class);
