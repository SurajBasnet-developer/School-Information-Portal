<?php

use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\Admin\FeeController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\GuardianController;
use App\Http\Controllers\Admin\MedicationController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\PeopleController;
use App\Http\Controllers\Admin\SiblingController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\TimetableController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Student routes
Route::resource('student', StudentController::class);

//Parent routes
Route::resource('parents', GuardianController::class);

//Teacher routes
Route::resource('teacher', TeacherController::class);

//class routes
Route::resource('class', ClassController::class);

//Activity routes
Route::resource('activity', ActivityController::class);

//Feedback routes
Route::resource('feedback', FeedbackController::class);

//Timetable routes
Route::resource('timetable', TimetableController::class);

//Emergency routes
Route::resource('emergency', PeopleController::class);

//Medication routes
Route::resource('medication', MedicationController::class);

//fee routes
Route::resource('fee', FeeController::class);

//Sibling routes
Route::resource('sibling', SiblingController::class);

//staff routes
Route::resource('staff', MemberController::class);
