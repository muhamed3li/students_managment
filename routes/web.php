<?php

use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\BarcodeController;
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
use Illuminate\Support\Facades\Route;


/**
 * جعل الوقت نظام 12 ساعة ^^^^^^^
 * اظهار المواعيد المتاحه فقط في اضافة مجموعة ^^^^^^^^
 * اخفاء اليوم الذي يظهر فيه الوقت صفر في جدول المجاميع ^^^^^^
 * اظهار المجمايع المتاحه في المستوى عند انشاء طالب ^^^^^^
 * اظهار تاريخ اليوم عند انشاء حضور ^^^^^^^^
 * عند اختيار طالب تظهر مجموعته عند الانشاء في جدول الماليات
*/


Route::get('/', [AdminHomeController::class,'index'])->name('admin.home');

Route::resource('department',DepartmentController::class);

Route::post('/printBarcode', function() { return view('admin.assets.allBarcodes'); });

Route::post('/printSinlgeBarcode/{student}',[BarcodeController::class,'printSinlgeBarcode']);

Route::get('/printAllStudentCards',[StudentController::class,'printAllStudentCards'])->name('printAllStudentCards');

Route::get('/printSingleCard/{student}',[StudentController::class,'printSingleCard'])->name('printSingleCard');

Route::get('/barcode',[BarcodeController::class,'generateBarcode']);

Route::prefix('groups')->group(function(){
    Route::get('/getStudents/{group}',[GroupController::class,'getStudents']);
    Route::post('group/deleteAll',[GroupController::class,'deleteAll'])->name('group.deleteAll');
    Route::resource('group',GroupController::class);
    
    Route::post('time/deleteAll',[TimeController::class,'deleteAll'])->name('time.deleteAll');
    Route::resource('time',TimeController::class);
});

Route::prefix('students')->group(function(){

    Route::get('attendanceBarcodePage',[AttendanceController::class,'attendanceBarcodePage'])->name('attendance.barcodePage');
    Route::post('attendanceById/{student}',[AttendanceController::class,'attendanceById'])->name('attendance.barcode');
    Route::post('attendance/deleteAll',[AttendanceController::class,'deleteAll'])->name('attendance.deleteAll');
    Route::post('attendance/attendAll',[AttendanceController::class,'attendAll'])->name('students.attendAll');
    Route::post('attendance/unAttendAll',[AttendanceController::class,'unAttendAll'])->name('students.unAttendAll');
    Route::post('attendance/barcodeOrId',[AttendanceController::class,'attendanceBarcodeOrId'])->name('students.attendanceBarcodeOrId');
    Route::resource('attendance',AttendanceController::class);

    Route::get('getStudetnById/{student}',[StudentController::class,'getStudetnById']);

    Route::post('student/deleteAll',[StudentController::class,'deleteAll'])->name('student.deleteAll');
    Route::resource('student',StudentController::class);


    Route::post('note/deleteAll',[NoteController::class,'deleteAll'])->name('note.deleteAll');
    Route::resource('note',NoteController::class);

    Route::post('payment/deleteAll',[PaymentController::class,'deleteAll'])->name('payment.deleteAll');
    Route::post('payment/paymentBarcodeOrId',[PaymentController::class,'paymentBarcodeOrId'])->name('payment.paymentBarcodeOrId');
    Route::resource('payment',PaymentController::class);
});

Route::prefix('exams')->group(function(){
    Route::post('exam/deleteAll',[ExamController::class,'deleteAll'])->name('exam.deleteAll');
    Route::resource('exam',ExamController::class);

    Route::post('examattindance/deleteAll',[ExamAttindanceController::class,'deleteAll'])->name('examattindance.deleteAll');
    Route::resource('examattindance',ExamAttindanceController::class);
});

Route::post('level/deleteAll',[LevelController::class,'deleteAll'])->name('level.deleteAll');
Route::resource('level',LevelController::class);

Route::get('level/getGroups/{level}',[LevelController::class,"getGroups"])->name('level.getGroups');

Route::get('student/getGroups/{student}',[StudentController::class,"getGroups"])->name('student.getGroups');

Route::post('expence/deleteAll',[ExpenceController::class,'deleteAll'])->name('expence.deleteAll');
Route::resource('expence',ExpenceController::class);