<?php

use App\Http\Controllers\CourseCategoryController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CourseController::class, 'index'])->name('home');

Route::resource('course', CourseController::class);
Route::resource('course-category', CourseCategoryController::class);
