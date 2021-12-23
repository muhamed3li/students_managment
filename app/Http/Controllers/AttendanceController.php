<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\Attendance;

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
