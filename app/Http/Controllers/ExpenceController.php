<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\CrudTrait;
use App\Models\Expence;

class ExpenceController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(Expence $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'name' => 'required|string',
            'reason' => 'nullable|string',
            'amount' => 'required|float',
            'date' => 'nullable|date',
        ]);
    }

    public function attReq()
    {
        return [
            'name' => request('name'),
            'reason' => request('reason'),
            'amount' => request('amount'),
            'date' => request('date'),
        ];
    }
}
