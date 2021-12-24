<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ExamAttindanceController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ExpenceController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TimeController;
use App\Models\ExamAttindance;
use App\Models\Level;
use Illuminate\Support\Facades\Route;


/**
 * جعل الوقت نظام 12 ساعة
 * اظهار المواعيد المتاحه فقط في اضافة مجموعة
 * اخفاء اليوم الذي يظهر فيه الوقت صفر في جدول المجاميع
 * اظهار المجمايع المتاحه في المستوى عند انشاء طالب
 * اظهار تاريخ اليوم عند انشاء حضور
 * عند اختيار طالب تظهر مجموعته عند الانشاء في جدول الماليات
*/

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
    return view('admin.welcome');
});

Route::resource('department',DepartmentController::class);


Route::prefix('groups')->group(function(){
    Route::resource('group',GroupController::class);
    Route::resource('time',TimeController::class);
});

Route::prefix('students')->group(function(){
    Route::resource('attendance',AttendanceController::class);
    Route::resource('student',StudentController::class);
    Route::resource('note',NoteController::class);
    Route::resource('payment',PaymentController::class);
});

Route::prefix('exams')->group(function(){
    Route::resource('exam',ExamController::class);
    Route::resource('examattindance',ExamAttindanceController::class);
});

Route::resource('level',LevelController::class);
Route::resource('expence',ExpenceController::class);