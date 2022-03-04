<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\Attendance\AttendanceDestroyRequest;
use App\Http\Requests\Admin\Attendance\AttendanceStoreRequest;
use App\Http\Requests\Admin\Attendance\AttendanceUpdateRequest;
use App\Http\Requests\Admin\Attendance\GroupAttendanceRequest;
use App\Models\Attendance;
use App\Models\Group;
use App\Models\Level;
use App\Models\Student;
use DateTime;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AttendanceController extends Controller
{
    public $model;

    public function __construct(Attendance $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $all = $this->model::with(['student:id,name,group_id,level_id', 'student.group:id,name', 'student.level:id,name'])->orderBy('id', 'DESC')->get();
        $levels = Level::get(['id', 'name']);
        return view("admin.pages.attendance.index", compact('all', 'levels'));
    }

    public function create()
    {
        $levels = Level::get();
        $groups = Group::get();
        $students = Student::get();
        return view("admin.pages.attendance.create", compact('levels', 'groups', 'students'));
    }

    public function store(AttendanceStoreRequest $request)
    {
        $student = Student::find($request->student_id);
        if ($request->attend) {
            $student->attendIn($request->day);
            Alert::success('نجاح', "تم تحضير الطالب في ذلك اليوم");
        } else {
            $student->unAttendIn($request->day);
            Alert::info('نجاح', "تم تغييب الطالب في ذلك اليوم");
        }
        return redirect()->back()->withInput();
    }

    public function edit(Attendance $attendance)
    {
        $students = Student::get(['id', 'name']);
        return view("admin.pages.attendance.edit", compact('attendance', 'students'));
    }

    public function update(AttendanceUpdateRequest $request, Attendance $attendance)
    {
        if ($request->attend) {
            $attendance->update([
                'student_id' => $request->student_id,
                'attend' => true,
                'day' => $request->day
            ]);
            Alert::success('نجاح', "تم تحضير الطالب في ذلك اليوم");
        } else {
            $attendance->update([
                'student_id' => $request->student_id,
                'attend' => false,
                'day' => $request->day
            ]);
            Alert::info('نجاح', "تم تغييب الطالب في ذلك اليوم");
        }
        return redirect()->back();
    }

    public function destroy(AttendanceDestroyRequest $request, Attendance $attendance)
    {
        $attendance->delete();
        Alert::success('نجاح', "تم حذف الحضور بنجاح ");
        return redirect()->back();
    }

    public function deleteAll()
    {
        Attendance::getQuery()->delete();
        Alert::success('نجاح', "تم حذف كل الحضور");
        return redirect()->back();
    }

    public function groupAttendancePage()
    {
        $levels = Level::get(['id', 'name']);
        $groups = Group::get(['id', 'name']);
        return view('admin.pages.attendance.groupAttendancePage', compact('levels', 'groups'));
    }

    public function groupAttendance(GroupAttendanceRequest $request)
    {
        $group = Group::find($request->group_id);
        $day = $request->day;
        $students = $group->students;
        return view('admin.pages.attendance.groupAttendance', compact('students', 'group', 'day'));
    }

    public function attendGroup(Request $request)
    {
        $students = Student::find($request->id);
        $attends = $request->attend;
        $day = $request->day;
        foreach ($students as $index => $student) {
            if (isset($attends) && key_exists($index, $attends)) {
                $student->attendIn($day);
            } else {
                $student->unAttendIn($day);
            }
        }

        Alert::success('Success', "تم تحضير الطلاب في ذلك اليوم");
        return redirect(route('attendance.groupAttendancePage'));
    }

    public function attendAll(Request $request)
    {
        $day = $request->day;
        $group = $request->group_id;
        $group = Group::find($group);

        foreach ($group->students as $student) {
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
        foreach ($group->students as $student) {
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
        if ($request->attendBarcode) {
            foreach ($request->students as $id) {
                Student::find($id)->attendIn($request->dayBarcode);
            }
            Alert::success('Success', "تم تحضير الطلاب في ذلك اليوم");
            return redirect()->back();
        } else {
            foreach ($request->students as $id) {
                Student::find($id)->unAttendIn($request->dayBarcode);
            }
            Alert::success('Success', "تم تغييب الطلاب في ذلك اليوم");
            return redirect()->back();
        }
    }

    public function attendStudentsWhoUnattended()
    {
        $groups = Group::get();
        foreach ($groups as $group) {
            $today = date('l', strtotime(today()));

            if ($today == "Friday") {
                $this->handleUnattend($group, 'fri');
            } else if ($today == "Saturday") {
                $this->handleUnattend($group, 'sat');
            } else if ($today == "Sunday") {
                $this->handleUnattend($group, 'sun');
            } else if ($today == "Monday") {
                $this->handleUnattend($group, 'mon');
            } else if ($today == "Tuesday") {
                $this->handleUnattend($group, 'tus');
            } else if ($today == "Wednesday") {
                $this->handleUnattend($group, 'wed');
            } else if ($today == "Thursday") {
                $this->handleUnattend($group, 'thu');
            }
        }

        Alert::success('Success', "تم تغييب الطلاب في ذلك اليوم");
        return redirect()->back();
    }

    public function handleUnattend($group, $day)
    {
        $$day = DateTime::createFromFormat("H:i:s", $group->time->$day);
        $now = now();
        $difference = $$day->diff($now)->h;
        if ($now > $$day && $difference >= 1) {
            foreach ($group->students as $student) {
                if (!$student->didAttendIn(today())) {
                    $student->unAttendIn(today());
                }
            }
        }
    }
}
