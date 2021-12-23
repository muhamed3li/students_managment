<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\Student;
use Illuminate\Http\Request;

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

    private function validation()
    {
        request()->validate([
            'student_id' => 'required|int',
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
