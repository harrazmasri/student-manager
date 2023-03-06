<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth');
})->name('auth');

Route::get('test', function () {
    return view('test');
});

Route::post('auth', [App\Http\Controllers\AuthController::class, 'auth'])->name('login.auth');
Route::post('register', [App\Http\Controllers\AuthController::class, 'register'])->name('register.auth');

Route::get('student', [App\Http\Controllers\StudentController::class, 'index'])->name('student.index');
Route::get('student/edit/{id}', [App\Http\Controllers\StudentController::class, 'edit'])->name('student.edit');
Route::post('student/update/{id}', [App\Http\Controllers\StudentController::class, 'update'])->name('student.update');
Route::get('student/user/{id}', [App\Http\Controllers\StudentController::class, 'user'])->name('student.user');
Route::delete('student/delete/{id}', [App\Http\Controllers\StudentController::class, 'delete'])->name('student.delete');
Route::get('student/logout', [App\Http\Controllers\StudentController::class, 'logout'])->name('student.logout');

Route::get('student/add/education/{id}', [App\Http\Controllers\StudentController::class, 'view_education'])->name('student.view_education');
Route::post('student/add/education/{id}', [App\Http\Controllers\StudentController::class, 'add_education'])->name('student.add_education');
Route::get('student/edit/education/{id}', [App\Http\Controllers\StudentController::class, 'edit_education'])->name('student.edit_education');
Route::post('student/update/education/{id}', [App\Http\Controllers\StudentController::class, 'update_education'])->name('student.update_education');


// Route::get('/test', function () {
//     return view('student.index');
// });

// common resource listings
// index - show all listings
// show - show single listings
// create - show form to create new listings
// store - store new listings
// edit - show form to edit listings
// update - update listings
// delete - delete listings

