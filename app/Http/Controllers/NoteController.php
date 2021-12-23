<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\CrudTrait;
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
