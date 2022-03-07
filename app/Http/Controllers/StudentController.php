<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\Student\StudentDestroyRequest;
use App\Http\Requests\Admin\Student\StudentStoreRequest;
use App\Http\Requests\Admin\Student\StudentUpdateRequest;
use App\Models\Group;
use App\Models\Level;
use App\Models\Student;
use RealRashid\SweetAlert\Facades\Alert;

class StudentController extends Controller
{
    public $model;


    public function __construct(Student $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $all = $this->model::with(['group:id,name', 'level:id,name'])->orderBy('id', 'DESC')->get();
        return view("admin.pages.student.index", compact('all'));
    }

    public function create()
    {
        $levels = Level::get(['id', 'name']);
        $groups = Group::get(['id', 'name']);
        return view("admin.pages.student.create", compact('levels', 'groups'));
    }

    public function store(StudentStoreRequest $request)
    {
        $this->model::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'do_pay' => $request->do_pay,
            'address' => $request->address,
            'home_phone' => $request->home_phone,
            'phone' => $request->phone,
            'father_phone' => $request->father_phone,
            'school' => $request->school,
            'status' => $request->status,
            'reserve_paid' => $request->reserve_paid,
            'level_id' => $request->level_id,
            'group_id' => $request->group_id,
        ]);
        Alert::success('نجاح', "تم تسجيل الطالب بنجاح");
        return redirect()->back()->withInput();
    }

    public function edit(Student $student)
    {
        $levels = Level::get(['id', 'name']);
        $groups = Group::get(['id', 'name']);
        return view("admin.pages.student.edit", compact('student', 'levels', 'groups'));
    }

    public function update(StudentUpdateRequest $request, Student $student)
    {
        $student->update([
            'name' => $request->name,
            'gender' => $request->gender,
            'do_pay' => $request->do_pay,
            'address' => $request->address,
            'home_phone' => $request->home_phone,
            'phone' => $request->phone,
            'father_phone' => $request->father_phone,
            'school' => $request->school,
            'status' => $request->status,
            'reserve_paid' => $request->reserve_paid,
            'level_id' => $request->level_id,
            'group_id' => $request->group_id,
        ]);
        Alert::success('نجاح', "تم تعديل الطالب بنجاح");
        return redirect()->back();
    }

    public function destroy(StudentDestroyRequest $request, Student $student)
    {
        $student->delete();
        Alert::success('نجاح', "تم حذف الطالب بنجاح");
        return redirect()->back();
    }

    public function deleteAll()
    {
        $this->model::getQuery()->delete();
        Alert::success('نجاح', "تم حذف كل الطلبة");
        return redirect()->back();
    }

    public function getGroups(Student $student)
    {
        $group = $student->group;
        echo json_encode($group);
    }

    public function getStudetnById(Student $student)
    {
        echo json_encode($student);
    }

    public function printAllStudentCards()
    {
        return view('admin.assets.allCards', [
            'students' => Student::get()
        ]);
    }

    public function printSingleCard(Student $student)
    {
        return view('admin.assets.singleCard', [
            'student' => $student
        ]);
    }
}
