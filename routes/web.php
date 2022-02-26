<?php

use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\BarcodeController;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ExamAttindanceController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ExpenceController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\HomeworkController;
use App\Http\Controllers\HomeworkSolutionController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\MonthController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentReportController;
use App\Http\Controllers\TimeController;
use Illuminate\Support\Facades\Route;


/**
 * اظهار رقم الهوية في جميع صفح المجاميع
 * مشكلة عند اظهار مكان الطالب في صفح المجاميع
 * اظهار بحث بالاسم في صفح المجاميع
 * زرار لطباعة بيانات الطالب كاملة
 * فصل الشهور في جدول منفصل عن جدول الماليات
 * صفحة فيها تقارير عن غياب اليوم بارقام اولياء الامور
 * صفحة المواعيد فيها شغل
 * الملازم والخصم يكونو اختياري
 * ألطالب الي لم يدفع قبل 25 يتم التنبيه
 * انا مش محتاج المستوى في الجداول الي فيها المجموعة
 * عدم اخذ الطالب غياب في يوم ليس عليه فيه مجموعة
 * اظهار المجاميع التي معادها اليوم فقط
 */


Route::get('/', [AdminHomeController::class, 'index'])->name('admin.home');

Route::resource('department', DepartmentController::class);

Route::view('/mybarcode', 'admin.assets.mybarcode');

Route::group(['prefix' => 'payments'], function () {
    Route::post('month/deleteAll', [MonthController::class, 'deleteAll'])->name('month.deleteAll');
    Route::resource('month', MonthController::class);

    Route::group(['prefix' => 'paymentCustom', 'as' => 'payment.'], function () {
        Route::get('groupPaymentPage', [PaymentController::class, 'groupPaymentPage'])->name('groupPaymentPage');

        Route::post('groupPayment', [PaymentController::class, 'groupPayment'])->name('groupPayment');

        Route::post('payGroup/', [PaymentController::class, 'payGroup'])->name('payGroup');
        Route::post('deleteAll', [PaymentController::class, 'deleteAll'])->name('deleteAll');
        Route::post('paymentBarcodeOrId', [PaymentController::class, 'paymentBarcodeOrId'])->name('paymentBarcodeOrId');
    });
    Route::resource('payment', PaymentController::class);
});


Route::group([], function () {
    Route::get('/allBarcodesSmall', [BarcodeController::class, 'allBarcodesSmall'])->name('allBarcodesSmall');

    Route::get('/allBarcodesBig', [BarcodeController::class, 'allBarcodesBig'])->name('allBarcodesBig');

    //this method is post
    Route::post('/printSinlgeBarcode/{student}', [BarcodeController::class, 'printSinlgeBarcode']);

    Route::get('/printAllStudentCards', [StudentController::class, 'printAllStudentCards'])->name('printAllStudentCards');

    Route::get('/printSingleCard/{student}', [StudentController::class, 'printSingleCard'])->name('printSingleCard');

    Route::get('/barcode', [BarcodeController::class, 'generateBarcode']);
});

Route::prefix('groups')->group(function () {
    Route::get('/getStudents/{group}', [GroupController::class, 'getStudents']);
    Route::get('/getExams/{group}', [GroupController::class, 'getExams']);

    Route::get('/getHomework/{group}', [GroupController::class, 'getHomework']);

    Route::post('group/deleteAll', [GroupController::class, 'deleteAll'])->name('group.deleteAll');
    Route::resource('group', GroupController::class);

    Route::post('time/deleteAll', [TimeController::class, 'deleteAll'])->name('time.deleteAll');
    Route::resource('time', TimeController::class);
});

Route::group(['prefix' => 'attendances'], function () {
    Route::group(['as' => 'attendance.'], function () {
        Route::get('attendanceBarcodePage', [AttendanceController::class, 'attendanceBarcodePage'])->name('barcodePage');
        Route::get('attendStudentsWhoUnattended', [AttendanceController::class, 'attendStudentsWhoUnattended'])->name('attendStudentsWhoUnattended');
        Route::post('attendanceById/{student}', [AttendanceController::class, 'attendanceById'])->name('barcode');
        Route::post('attendance/deleteAll', [AttendanceController::class, 'deleteAll'])->name('deleteAll');
        Route::post('attendance/attendAll', [AttendanceController::class, 'attendAll'])->name('attendAll');
        Route::post('attendance/unAttendAll', [AttendanceController::class, 'unAttendAll'])->name('unAttendAll');
        Route::post('attendance/barcodeOrId', [AttendanceController::class, 'attendanceBarcodeOrId'])->name('attendanceBarcodeOrId');

        Route::get('attendance/groupAttendancePage', [AttendanceController::class, 'groupAttendancePage'])->name('groupAttendancePage');

        Route::post('attendance/groupAttendance', [AttendanceController::class, 'groupAttendance'])->name('groupAttendance');

        Route::post('attendance/attendGroup', [AttendanceController::class, 'attendGroup'])->name('attendGroup');
    });
    Route::resource('attendance', AttendanceController::class);
});

Route::prefix('students')->group(function () {

    Route::group(['prefix' => 'barcode', 'as' => 'barcode.'], function () {
        Route::get('index', [BarcodeController::class, 'index'])->name('index');

        Route::get('someStudentsPage', [BarcodeController::class, 'someStudentsPage'])->name('someStudentsPage');
        Route::post('printSomeStudentsPage', [BarcodeController::class, 'printSomeStudentsPage'])->name('printSomeStudentsPage');

        Route::get('groupStudentsPage', [BarcodeController::class, 'groupStudentsPage'])->name('groupStudentsPage');
        Route::post('printGroupStudentsPage', [BarcodeController::class, 'printGroupStudentsPage'])->name('printGroupStudentsPage');

        Route::get('levelStudentsPage', [BarcodeController::class, 'levelStudentsPage'])->name('levelStudentsPage');
        Route::post('printLevelStudentsPage', [BarcodeController::class, 'printLevelStudentsPage'])->name('printLevelStudentsPage');
    });



    Route::group(['prefix' => 'cards', 'as' => 'cards.'], function () {
        Route::get('index', [CardsController::class, 'index'])->name('index');

        Route::get('someStudentsPage', [CardsController::class, 'someStudentsPage'])->name('someStudentsPage');
        Route::post('printSomeStudentsPage', [CardsController::class, 'printSomeStudentsPage'])->name('printSomeStudentsPage');

        Route::get('groupStudentsPage', [CardsController::class, 'groupStudentsPage'])->name('groupStudentsPage');
        Route::post('printGroupStudentsPage', [CardsController::class, 'printGroupStudentsPage'])->name('printGroupStudentsPage');

        Route::get('levelStudentsPage', [CardsController::class, 'levelStudentsPage'])->name('levelStudentsPage');
        Route::post('printLevelStudentsPage', [CardsController::class, 'printLevelStudentsPage'])->name('printLevelStudentsPage');
    });






    Route::get('getStudetnById/{student}', [StudentController::class, 'getStudetnById']);

    Route::post('student/deleteAll', [StudentController::class, 'deleteAll'])->name('student.deleteAll');



    Route::resource('student', StudentController::class);


    Route::post('note/deleteAll', [NoteController::class, 'deleteAll'])->name('note.deleteAll');
    Route::resource('note', NoteController::class);
});

Route::prefix('exams')->group(function () {
    Route::post('exam/deleteAll', [ExamController::class, 'deleteAll'])->name('exam.deleteAll');
    Route::resource('exam', ExamController::class);

    Route::post('examattindance/deleteAll', [ExamAttindanceController::class, 'deleteAll'])->name('examattindance.deleteAll');
    Route::post('examattindance/examAttendaceByBarcodeOrId', [ExamAttindanceController::class, 'examAttendaceByBarcodeOrId'])->name('examattindance.examAttendaceByBarcodeOrId');

    Route::get('examattindance/groupAttendancePage', [ExamAttindanceController::class, 'groupAttendancePage'])->name('examattindance.groupAttendancePage');

    Route::post('examattindance/groupAttendance', [ExamAttindanceController::class, 'groupAttendance'])->name('examattindance.groupAttendance');

    Route::post('examattindance/attendGroup/{exam}', [ExamAttindanceController::class, 'attendGroup'])->name('examattindance.attendGroup');

    Route::resource('examattindance', ExamAttindanceController::class);
});

Route::group(['prefix' => 'homeworks'], function () {
    Route::post('homework/deleteAll', [HomeworkController::class, 'deleteAll'])->name('homework.deleteAll');
    Route::resource('homework', HomeworkController::class);


    Route::post('homeworkSolution/homeworkSolutionByBarcodeOrId', [HomeworkSolutionController::class, 'homeworkSolutionByBarcodeOrId'])->name('homework.homeworkSolutionByBarcodeOrId');

    Route::post('homeworkSolution/deleteAll', [HomeworkSolutionController::class, 'deleteAll'])->name('homeworkSolution.deleteAll');

    Route::get('homeworkSolution/groupAttendancePage', [HomeworkSolutionController::class, 'groupAttendancePage'])->name('homeworkSolution.groupAttendancePage');

    Route::post('homeworkSolution/groupAttendance', [HomeworkSolutionController::class, 'groupAttendance'])->name('homeworkSolution.groupAttendance');

    Route::post('homeworkSolution/attendGroup/{homework}', [HomeworkSolutionController::class, 'attendGroup'])->name('homeworkSolution.attendGroup');

    Route::resource('homeworkSolution', HomeworkSolutionController::class);
});


Route::group(['prefix' => 'reports', 'as' => 'reports.'], function () {
    Route::group(['prefix' => 'students', 'as' => 'students.'], function () {
        Route::get('/', [StudentReportController::class, 'index'])->name('index');
        Route::get('singleStudentReport', [StudentReportController::class, 'singleStudentReport'])->name('singleStudentReport');
    });
});

Route::post('level/deleteAll', [LevelController::class, 'deleteAll'])->name('level.deleteAll');
Route::get('level/getGroups/{level}', [LevelController::class, "getGroups"])->name('level.getGroups');

Route::get('level/getLevelById/{level}', [LevelController::class, "getLevelById"])->name('level.getLevelById');

Route::resource('level', LevelController::class);


Route::get('student/getGroups/{student}', [StudentController::class, "getGroups"])->name('student.getGroups');

Route::post('expence/deleteAll', [ExpenceController::class, 'deleteAll'])->name('expence.deleteAll');
Route::resource('expence', ExpenceController::class);
