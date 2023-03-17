<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;//this imports the controller studentcontroller
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
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

Route::get('/home', function () {
    return view('master_layout.layout');
});


/*Route::get('/students', function () {
    return view('students.students_list');
});*/


// Route::get('/course', function () {
//     return view('course.course_list');
// });

// Route::get('/department', function () {
//     return view('department.department_list');
// });
//how to call resource in controller
Route::resource('students',StudentController::class);
Route::resource('course',CourseController::class);
Route::resource('department',DepartmentController::class);
