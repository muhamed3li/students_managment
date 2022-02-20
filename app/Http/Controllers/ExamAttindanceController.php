<?php

namespace App\Http\Controllers;

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
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(ExamAttindance $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    

    public function create()
    {
        $model = $this->modelName;
        $levels = Level::get();
        $exams = Exam::get();
        return view("admin.pages.{$this->modelName}.create",compact('model','levels','exams'));
    }

    public function examAttendaceByBarcodeOrId(Request $request)
    {
        foreach($request->students as $id)
        {
            Student::find($id)->attendInExam($request->exam_id2,$request->degree2);
        }
        Alert::success('Success', "تم تحضير الطلاب في ذلك الإمتحان");
        return redirect()->back();
    }

    public function groupAttendancePage()
    {
        $levels = Level::get();
        return view('admin.pages.examattindance.groupAttendancePage',compact('levels'));
    }

    public function groupAttendance(Request $request)
    {
        $exam = Exam::find($request->exam_id);
        $group = Group::find($request->group_id);
        $students = $group->students;
        return view('admin.pages.examattindance.groupAttendance',compact('exam','students','group'));
    }

    public function attendGroup(Request $request,Exam $exam)
    {
        $students = Student::find($request->id);
        $degrees = $request->degree;
        foreach($students as $index => $student)
        {
            $student->attendInExam($exam->id,$degrees[$index]);
        }

        Alert::success('Success', "تم تحضير الطلاب في ذلك الإمتحان");
        return redirect(route('examattindance.groupAttendancePage'));
    }

    private function validation()
    {
        request()->validate([
            'student_id' => 'required|int|exists:students,id',
            'exam_id' => 'required|int|exists:exams,id',
            'degree' => 'required|numeric',
        ]);
    }

    public function attReq()
    {
        return [
            'student_id' => request('student_id'),
            'exam_id' => request('exam_id'),
            'degree' => request('degree'),
        ];
    }
}
