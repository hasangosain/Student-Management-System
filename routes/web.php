<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SignoutController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\RoutineController;
use App\Http\Controllers\TeachController;

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
    return view('home');
});
Route::get('/login', [AdminController::class, 'login']);
Route::post('/login', [AdminController::class, 'logedin']);
Route::get('/adminhome', [AdminController::class, 'adminhome'])->middleware(['checkadmin']);
Route::get('/signout',  [SignoutController::class, 'signout']);

Route::get('/studentadd', [StudentController::class, 'add'])->middleware(['checkadmin']);
Route::post('/studentadd', [StudentController::class, 'insert']);
Route::get('/studentrecord', [StudentController::class, 'select'])->middleware(['checkadmin']);
Route::get('/student/delete/{id}', [StudentController::class, 'delete']);
Route::get('/student/update/{id}', [StudentController::class, 'edit'])->middleware(['checkadmin']);
Route::post('studentupdate', [StudentController::class, 'update']);

Route::get('/teacheradd', [TeacherController::class, 'add'])->middleware(['checkadmin']);
Route::post('/teacheradd',[TeacherController::class, 'insert']);
Route::get('/teacherrecord', [TeacherController::class, 'select'])->middleware(['checkadmin']);
Route::get('/teacher/delete/{id}', [TeacherController::class, 'delete']);
Route::get('/teacher/update/{id}', [TeacherController::class, 'edit'])->middleware(['checkadmin']);
Route::post('teacherupdate', [TeacherController::class, 'update']);

Route::get('/classadd', [ClassController::class, 'add'])->middleware(['checkadmin']);
Route::post('/classadd',[ClassController::class, 'insert']);
Route::get('/classrecord', [ClassController::class, 'select'])->middleware(['checkadmin']);
Route::get('/class/delete/{id}', [ClassController::class, 'delete']);
Route::get('/class/update/{id}', [ClassController::class, 'edit'])->middleware(['checkadmin']);
Route::post('classupdate', [ClassController::class, 'update']);

Route::get('/routineadd', [RoutineController::class, 'add'])->middleware(['checkadmin']);
Route::post('/routineadd',[RoutineController::class, 'insert']);
Route::get('/routinerecord', [RoutineController::class, 'select'])->middleware(['checkadmin']);
Route::get('/routine/delete/{id}', [RoutineController::class, 'delete']);
Route::get('/routine/update/{id}', [RoutineController::class, 'edit'])->middleware(['checkadmin']);
Route::post('routineupdate', [RoutineController::class, 'update']);

Route::get('/signin', [TeachController::class, 'signin']);
Route::post('/signin', [TeachController::class, 'loggedin']);
Route::get('/teacherhome', [TeachController::class, 'teacherhome'])->middleware(['checkteacher']);
Route::get('/profile', [TeachController::class, 'profile'])->middleware(['checkteacher']);
Route::get('/routine', [TeachController::class, 'routine'])->middleware(['checkteacher']);
Route::get('/logout',  [SignoutController::class, 'logout']);




