<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ApproveController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;

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


Route::get('register', [RegisterController::class, 'register']);
Route::post('store-register', [RegisterController::class, 'storeRegister']);

Route::get('userinfo', [AdminController::class, 'UserAll']);
Route::get('assign-teacher', [AdminController::class, 'assignTeacher']);
Route::post('store-assign-teacher', [AdminController::class, 'storeAssignTeacher']);
Route::get('view-teacher', [AdminController::class, 'viewTeacher']);

Route::get('approveUser/{id}', [ApproveController::class, 'approve']);


Route::get('login', [LoginController::class, 'login']);
Route::post('store-login', [LoginController::class, 'storelogin']);


Route::middleware(['CheckLoggedIn'])->group(function () {



    Route::middleware(['CheckISStudent'])->group(function () {
        Route::get('StudentDashboard', [StudentController::class, 'StudentDashboard']);
    });

    Route::middleware(['CheckISAdmin'])->group(function () {
        Route::get('AdminDashboard', [AdminController::class, 'AdminDashboard']);
    });

    Route::middleware(['CheckISTeacher'])->group(function () {
        Route::get('TeacherDashboard', [TeacherController::class, 'TeacherDashboard']);
    });
});


Route::get('course', [StudentController::class, 'course']);
Route::post('store-course', [StudentController::class, 'StoreCourse']);
Route::get('courseinfo', [StudentController::class, 'courseAll']);

Route::get('section', [StudentController::class, 'section']);
Route::post('store-section', [StudentController::class, 'StoreSection']);
Route::get('sectioninfo', [StudentController::class, 'sectionAll']);

Route::get('session', [StudentController::class, 'session']);
Route::post('store-session', [StudentController::class, 'StoreSession']);
Route::get('sessioninfo', [StudentController::class, 'sessionAll']);

Route::get('enroll-list', [StudentController::class, 'EnrollsList']);
Route::post('store-enrolls', [StudentController::class, 'StoreEnrolls']);

Route::get('project-submission', [StudentController::class, 'projectSubmission']);
Route::post('store-project-submission', [StudentController::class, 'storeProjectSubmission']);
Route::get('project-all', [StudentController::class, 'allProjectIdeas']);



Route::get('dashboard', [DashboardController::class, 'dashboard']);
// Route::get('main-dashboard', [DashboardController::class, 'MainDashboard']);
Route::get('logout', [DashboardController::class, 'logout']);
