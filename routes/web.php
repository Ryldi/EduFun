<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\WriterController;

Route::get('/', [CategoryController::class, 'get_category'])->name('home');

Route::get('/course/{id}', [CourseController::class, 'get_course'])->name('course.show');

Route::get('/category/{id}', [CategoryController::class, 'get_detail'])->name('category.show');

Route::get('/writers', [WriterController::class, 'get_writers'])->name('writer.show');

Route::get('/writer/{id}', [WriterController::class, 'get_writer'])->name('writer.detail');

Route::get('/popular', [CourseController::class, 'get_popular'])->name('popular');	

Route::get('/about-us', function () {
    return view('main.about-us');
})->name('about-us');