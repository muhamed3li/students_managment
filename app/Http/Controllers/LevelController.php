<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(Level $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    public function getGroups(Level $level)
    {
        $groups = $level->groups;
        echo json_encode($groups);
    }

    private function validation()
    {
        request()->validate([
            'name' => 'required|string',
            // 'reserve_cost' => 'required|numeric',
            'malazem_cost' => 'required|numeric',
            'month_cost' => 'required|numeric',
        ]);
    }

    public function attReq()
    {
        return [
            'name' => request('name'),
            // 'reserve_cost' => request('reserve_cost'),
            'malazem_cost' => request('malazem_cost'),
            'month_cost' => request('month_cost'),
        ];
    }
}
