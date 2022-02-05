<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\ExamAttindance;
use App\Models\Level;

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
        return view("admin.pages.{$this->modelName}.create",compact('model','levels'));
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
