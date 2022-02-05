<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\Student;

class StudentController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(Student $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    public function create()
    {
        $model = $this->modelName;
        $id = Student::all()->last()->id ?? "";

        return view("admin.pages.{$this->modelName}.create",compact('model'));
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
        return view('admin.assets.allCards',[
            'students'=> Student::get()
        ]);
    }

    public function printSingleCard(Student $student)
    {
        return view('admin.assets.singleCard',[
            'student'=> $student
        ]);
    }
   

    private function validation()
    {
        request()->validate([
            'name' => 'required|string',
            'gender' => 'boolean',
            'address' => 'nullable|string',
            'home_phone' => 'nullable|string',
            'phone' => 'nullable|string',
            // 'father_name' => 'required|string',
            'father_phone' => 'nullable|string',
            'school' => 'nullable|string',
            'status' => 'required|in:reserve,in,out,fired', //
            'reserve_paid' => 'nullable|numeric',
            'level_id' => 'nullable|int|exists:levels,id',
            'group_id' => 'nullable|int|exists:groups,id',
        ]);
    }

    public function attReq()
    {
        return [
            'name' => request('name'),
            'gender' => request('gender',false),
            'address' => request('address'),
            'home_phone' => request('home_phone'),
            'phone' => request('phone'),
            // 'father_name' => request('father_name'),
            'father_phone' => request('father_phone'),
            'school' => request('school'),
            'status' => request('status'),
            'reserve_paid' => request('reserve_paid'),
            'level_id' => request('level_id'),
            'group_id' => request('group_id'),
        ];
    }
}
