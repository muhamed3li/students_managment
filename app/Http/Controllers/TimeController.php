<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\Time;
use Illuminate\Http\Request;

class TimeController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(Time $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'sat' => 'nullable',
            'sun' => 'nullable',
            'mon' => 'nullable',
            'tus' => 'nullable',
            'wed' => 'nullable',
            'thu' => 'nullable',
            'fri' => 'nullable',
        ]);
    }

    public function attReq()
    {
        return [
            'sat' => request('sat','00:00'),
            'sun' => request('sun','00:00'),
            'mon' => request('mon','00:00'),
            'tus' => request('tus','00:00'),
            'wed' => request('wed','00:00'),
            'thu' => request('thu','00:00'),
            'fri' => request('fri','00:00'),
        ];
    }
}
