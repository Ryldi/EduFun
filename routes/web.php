<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', [CategoryController::class, 'get_category']);

Route::get('/course', [CourseController::class, 'get_course'])->name('course.show');

Route::get('/category/{id}', [CategoryController::class, 'get_detail'])->name('category.show');

