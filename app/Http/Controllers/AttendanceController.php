<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\Attendance;
use App\Models\Group;
use App\Models\Level;
use App\Models\Student;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AttendanceController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(Attendance $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    public function index()
    {
        $all = $this->model::orderBy('id', 'DESC')->get();
        $model = $this->modelName;
        $levels = Level::get();

        return view("admin.pages.{$this->modelName}.index",compact('all','model','levels'));
    }

    public function create()
    {
        $levels = Level::get();
        $model = $this->modelName;
        return view("admin.pages.{$this->modelName}.create",[
            'model' => $model,
            'levels' => $levels
        ]);
    }

    public function attendAll(Request $request)
    {
        $day = $request->day;
        $group = $request->group_id;
        $group = Group::find($group);

        foreach($group->students as $student)
        {
            $student->attendIn($day);
        }
        Alert::success('Success', "تم تحضير الطلاب اليوم");
        return redirect()->back();
    }


    public function unAttendAll(Request $request)
    {
        $day = $request->day;
        $group = $request->group_id2;
        $group = Group::find($group);
        foreach($group->students as $student)
        {
            $student->unAttendIn($day);
        }
        Alert::success('Success', "تم تغييب الطلاب اليوم");
        return redirect()->back();
    }

    public function attendanceBarcodePage()
    {
        return view('admin.pages.attendance.barcodePage');
    }

    public function attendanceById(Student $student)
    {
        $student->attendIn(today());
        return json_encode([
            'student' => $student
        ]);
    }

    public function attendanceBarcodeOrId(Request $request)
    {
        if($request->attendBarcode)
        {
            foreach($request->students as $id)
            {
                Student::find($id)->attendIn($request->dayBarcode);
            }
            Alert::success('Success', "تم تحضير الطلاب في ذلك اليوم");
            return redirect()->back();
        }
        else
        {
            foreach($request->students as $id)
            {
                Student::find($id)->unAttendIn($request->dayBarcode);
            }
            Alert::success('Success', "تم تغييب الطلاب في ذلك اليوم");
            return redirect()->back();
        }
    }

    private function validation()
    {
        request()->validate([
            'student_id' => 'required|int|exists:students,id',
            'attend' => 'boolean',
            'day' => 'required|date',
        ]);
    }

    public function attReq()
    {
        return [
            'student_id' => request('student_id'),
            'attend' => request('attend',false),
            'day' => request('day'),
        ];
    }
}