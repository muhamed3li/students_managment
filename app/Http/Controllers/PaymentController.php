<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\CrudTrait;
use App\Models\Payment;

class PaymentController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(Payment $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'pay_from' => 'required|date',
            'pay_to' => 'required|date',
            'month_paid' => 'required|numeric',
            'malazem_paid' => 'required|numeric',
            'discount' => 'required|numeric',
            'student_id' => 'required|int|exists:students,id',
            'group_id' => 'required|int|exists:groups,id',
        ]);
    }

    public function attReq()
    {
        return [
            'pay_from' => request('pay_from'),
            'pay_to' => request('pay_to'),
            'month_paid' => request('month_paid'),
            'malazem_paid' => request('malazem_paid'),
            'discount' => request('discount'),
            'student_id' => request('student_id'),
            'group_id' => request('group_id'),
        ];
    }
}
