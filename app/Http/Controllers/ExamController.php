<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\Exam;

class ExamController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(Exam $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    public function index()
    {
        $all = $this->model::with(['level','group'])->orderBy('id', 'DESC')->get();
        $model = $this->modelName;
        return view("admin.pages.{$this->modelName}.index",compact('all','model'));
    }

    private function validation()
    {
        request()->validate([
            'name' => 'nullable|string',
            'level_id' => 'required|int|exists:levels,id',
            'group_id' => 'required|int|exists:groups,id',
            'exam_date' => 'required|date',
            'exam_max' => 'required|numeric',
            'exam_min' => 'required|numeric',
        ]);
    }

    public function attReq()
    {
        return [
            'name' => request('name'),
            'level_id' => request('level_id'),
            'group_id' => request('group_id'),
            'exam_date' => request('exam_date'),
            'exam_max' => request('exam_max'),
            'exam_min' => request('exam_min'),
        ];
    }
}