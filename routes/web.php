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
    Route::get('/courses', 'index')->name('courses.index');
    Route::post('/courses', 'store')->name('courses.store');
    Route::get('/courses/create', 'create')->name('courses.create');
    Route::get('/courses/{course}', 'show')->name('courses.show');
    Route::put('/courses/{course}', 'update')->name('courses.update');
    Route::delete('/courses/{course}', 'destroy')->name('courses.destroy');
    Route::get('/courses/{course}/edit', 'edit')->name('courses.edit');
});

Route::get('/123', function () {
    return view('welcome');
});
