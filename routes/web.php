<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\EmployeeController;

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

/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard'); */

//for inxeding
Route::get('/employees', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('/teachers', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('/students', [StudentController::class, 'index'])->name('student.index');



//auth route for all
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// for Admin
Route::group(['middleware' => ['auth', 'role:admin']], function() { 
    Route::get('/dashboard/profile',  [DashboardController::class, 'profile'])->name('dashboard.profile');
    //for inxeding
    Route::get('/employees', [EmployeeController::class, 'index'])->name('employee.index');
    Route::get('/teachers', [TeacherController::class, 'index'])->name('teacher.index');
    Route::get('/students', [StudentController::class, 'index'])->name('student.index');
});

// for Employe
Route::group(['middleware' => ['auth', 'role:employee']], function() { 
    Route::get('/dashboard/postcreate',  [DashboardController::class, 'postcreate'])->name('dashboard.postcreate');
});

// for Teacher
Route::group(['middleware' => ['auth', 'role:teacher']], function() { 
    Route::get('/dashboard/myprofile',  [DashboardController::class, 'myprofile'])->name('dashboard.myprofile');
});

// for Student
Route::group(['middleware' => ['auth', 'role:student']], function() { 
    Route::get('/dashboard/postcreate',  [DashboardController::class, 'postcreate'])->name('dashboard.postcreate');
});

require __DIR__.'/auth.php';
