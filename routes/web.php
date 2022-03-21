<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/choose', function () {
    return view('choose');
});

Route::controller(CourseController::class)->group(function () {
    Route::get('/course', 'index')->name('course.index');
    Route::post('/course', 'store')->name('course.store');
    Route::get('/course/create', 'create')->name('course.create');
    Route::get('/course/{course}', 'show')->name('course.show');
    Route::put('/course/{course}', 'update')->name('course.update');
    Route::delete('/course/{course}', 'destroy')->name('course.destroy');
    Route::get('/course/{course}/edit', 'edit')->name('course.edit');
});

Route::get('/123', function () {
    return view('welcome');
});
