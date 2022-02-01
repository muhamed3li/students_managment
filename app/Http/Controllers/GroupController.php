<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\Group;

class GroupController extends Controller
{
    use CrudTrait;


    public $model;
    public $modelName;


    public function __construct(Group $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    public function getStudents(Group $group)
    {
        $students = $group->students;
        echo json_encode($students);
    }

    private function validation()
    {
        request()->validate([
            'name' => 'required|string',
            'level_id' => 'required|int',
            'time_id' => 'required|int',
        ]);
    }

    public function attReq()
    {
        return [
            'name' => request('name'),
            'level_id' => request('level_id'),
            'time_id' => request('time_id'),
        ];
    }
}
