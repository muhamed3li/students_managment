<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\ExamAttendance\ExamAttendanceDestroyRequest;
use App\Http\Requests\Admin\ExamAttendance\ExamAttendanceStoreRequest;
use App\Http\Requests\Admin\ExamAttendance\ExamAttendanceUpdateRequest;
use App\Http\Requests\Admin\ExamAttendance\GroupAttendanceRequest;
use App\Http\Traits\CrudTrait;
use App\Models\Exam;
use App\Models\ExamAttindance;
use App\Models\Group;
use App\Models\Level;
use App\Models\Student;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ExamAttindanceController extends Controller
{
    public $model;


    public function __construct(ExamAttindance $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $all = $this->model::with(['exam:id,name,exam_min', 'student:id,name'])->orderBy('id', 'DESC')->get();
        return view("admin.pages.examattindance.index", compact('all'));
    }

    public function create()
    {
        $levels = Level::get(['id', 'name']);
        $exams = Exam::get(['id', 'name']);
        $groups = Group::get(['id', 'name']);
        $students = Student::get(['id', 'name']);
        return view("admin.pages.examattindance.create", compact('levels', 'exams', 'groups', 'students'));
    }

    public function store(ExamAttendanceStoreRequest $request)
    {
        $student = Student::find($request->student_id);
        $student->attendInExam($request->exam_id, $request->degree);
        Alert::success('نجاح', "تم تسجيل درجة الطالب في الإمتحان ");
        return redirect()->back()->withInput();
    }

    public function edit(ExamAttindance $examattindance)
    {
        $students = Student::get(['id', 'name']);
        $exams = Exam::get(['id', 'name']);
        return view("admin.pages.examattindance.edit", compact('examattindance', 'students', 'exams'));
    }

    public function update(ExamAttendanceUpdateRequest $request, ExamAttindance $examattindance)
    {
        $examattindance->update([
            'student_id' => $request->student_id,
            'exam_id' => $request->exam_id,
            'degree' => $request->degree
        ]);
        Alert::success('نجاح', "تم تعديل درجة الطالب في الإمتحان ");
        return redirect()->back();
    }

    public function destroy(ExamAttendanceDestroyRequest $request, ExamAttindance $examattindance)
    {
        $examattindance->delete();
        Alert::success('نجاح', "تم حذف حضور الامتحان بنجاح ");
        return redirect()->back();
    }

    public function deleteAll()
    {
        $this->model::getQuery()->delete();
        Alert::success('نجاح', "تم حذف كل حضور الامتحانات");
        return redirect()->back();
    }



    public function examAttendaceByBarcodeOrId(Request $request)
    {
        foreach ($request->students as $id) {
            Student::find($id)->attendInExam($request->exam_id2, $request->degree2);
        }
        Alert::success('Success', "تم تحضير الطلاب في ذلك الإمتحان");
        return redirect()->back()->withInput();
    }

    public function groupAttendancePage()
    {
        $levels = Level::get(['id', 'name']);
        $groups = Group::get(['id', 'name']);
        $exams = Exam::get(['id', 'name']);
        return view('admin.pages.examattindance.groupAttendancePage', compact('levels', 'groups', 'exams'));
    }

    public function groupAttendance(GroupAttendanceRequest $request)
    {
        $exam = Exam::find($request->exam_id);
        $group = Group::find($request->group_id);
        $students = $group->students;
        return view('admin.pages.examattindance.groupAttendance', compact('exam', 'students', 'group'));
    }

    public function attendGroup(Request $request, Exam $exam)
    {
        $students = Student::find($request->id);
        $degrees = $request->degree;
        foreach ($students as $index => $student) {
            $student->attendInExam($exam->id, $degrees[$index]);
        }

        Alert::success('Success', "تم تحضير الطلاب في ذلك الإمتحان");
        return redirect(route('examattindance.groupAttendancePage'));
    }
}
