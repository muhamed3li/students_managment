<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\Level;
use App\Models\Note;

class NoteController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(Note $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    public function index()
    {
        $all = $this->model::with('student:id,name')->orderBy('id', 'DESC')->get();
        $model = $this->modelName;
        return view("admin.pages.{$this->modelName}.index",compact('all','model'));
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
            'note' => 'required|string',
        ]);
    }

    public function attReq()
    {
        return [
            'student_id' => request('student_id'),
            'note' => request('note'),
        ];
    }
}
