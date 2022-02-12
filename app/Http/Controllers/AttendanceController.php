<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\Attendance;
use App\Models\Group;
use App\Models\Level;
use App\Models\Student;
use DateTime;
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



    public function attendStudentsWhoUnattended()
    {
        $groups = Group::get();
        foreach($groups as $group)
        {
            $today = date('l', strtotime(today()));
            
            if($today == "Friday")
            {
                $this->handleUnattend($group,'fri');                
            }
            else if($today == "Saturday")
            {
                $this->handleUnattend($group,'sat');
            }
            else if($today == "Sunday")
            {
                $this->handleUnattend($group,'sun');
            }
            else if($today == "Monday")
            {
                $this->handleUnattend($group,'mon');
            }
            else if($today == "Tuesday")
            {
                $this->handleUnattend($group,'tus');
            }
            else if($today == "Wednesday")
            {
                $this->handleUnattend($group,'wed');
            }
            else if($today == "Thursday")
            {
                $this->handleUnattend($group,'thu');
            }
        }

        Alert::success('Success', "تم تغييب الطلاب في ذلك اليوم");
        return redirect()->back();
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


    public function handleUnattend($group,$day)
    {
        $$day = DateTime::createFromFormat("H:i:s",$group->time->$day);
        $now = now();
        $difference = $$day->diff($now)->h;
        if($now > $$day && $difference >= 1)
        {
            foreach($group->students as $student)
            {
                if( !$student->didAttendIn(today()))
                {
                    $student->unAttendIn(today());
                }
            }
        }
    }
}