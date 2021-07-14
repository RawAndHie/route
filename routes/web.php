<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
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

Route::get('/student',[StudentController::class,'create']);
Route::get('/teacher',[TeacherController::class,'create']);

Route::post('/student',[StudentController::class,'store']);
Route::post('/teacher',[TeacherController::class,'store']);

