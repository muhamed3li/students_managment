<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\CrudTrait;
use App\Models\Group;
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


    public function groupPaymentPage()
    {
        $levels = Level::get();
        return view('admin.pages.payment.groupPaymentPage',compact('levels'));
    }

    public function groupPayment(Request $request)
    {
        $pay_from = $request->pay_from;
        $pay_to = $request->pay_to;
        $month_paid = $request->month_paid;
        $malazem_paid = $request->malazem_paid;
        $discount = $request->discount;
        $group = Group::find($request->group_id);
        $students = $group->students;
        return view('admin.pages.payment.groupPayment',compact('students','group','pay_from','pay_to','month_paid','malazem_paid','discount'));
    }

    public function payGroup(Request $request)
    {
        $students = Student::find($request->id);
        $months_paid = $request->month_paid;
        $malazems_paid = $request->malazem_paid;
        $discounts = $request->discount;
        $pay_from = $request->pay_from;
        $pay_to = $request->pay_to;
        foreach($students as $index => $student)
        {
            $student->payIn((object)[
                'pay_from' => $pay_from,
                'pay_to' => $pay_to,
                'month_paid' => $months_paid[$index],
                'malazem_paid' => $malazems_paid[$index],
                'discount' => $discounts[$index] 
            ]);
        }

        Alert::success('Success', "تم تسجيل دفع مجموعة");
        return redirect(route('payment.groupPaymentPage'));
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

    private function makeValidation($request)
    {
        $request->validate([
            'pay_from' => 'required|date',
            'pay_to' => 'required|date',
            'month_paid' => 'required|numeric',
            'malazem_paid' => 'required|numeric',
        ]);
    }
}
