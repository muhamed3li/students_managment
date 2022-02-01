<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\CrudTrait;
use App\Models\Level;
use App\Models\Payment;
use App\Models\Student;
use RealRashid\SweetAlert\Facades\Alert;

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

    public function create()
    {
        $model = $this->modelName;
        $levels = Level::get();
        return view("admin.pages.{$this->modelName}.create",compact('model','levels'));
    }

    public function paymentBarcodeOrId(Request $request)
    {
        $request->validate([
            'pay_from' => 'required|date',
            'pay_to' => 'required|date',
            'month_paid' => 'required|numeric',
            'malazem_paid' => 'required|numeric',
        ]);
        foreach($request->students as $id)
        {
            Student::find($id)->payIn($request);
        }
        Alert::success('Success', "تم انشاء دفع الطلاب في ذلك اليوم");
        return redirect()->back();
    }

    private function validation()
    {
        request()->validate([
            'pay_from' => 'required|date',
            'pay_to' => 'required|date',
            'month_paid' => 'required|numeric',
            'malazem_paid' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'student_id' => 'required|int|exists:students,id',
        ]);
    }

    public function attReq()
    {
        return [
            'pay_from' => request('pay_from'),
            'pay_to' => request('pay_to'),
            'month_paid' => request('month_paid'),
            'malazem_paid' => request('malazem_paid'),
            'discount' => request('discount',0),
            'student_id' => request('student_id'),
            'total' => request('month_paid') + request('malazem_paid') - request('discount',0)
        ];
    }
}
