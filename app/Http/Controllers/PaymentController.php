<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\CrudTrait;
use App\Models\Group;
use App\Models\Level;
use App\Models\Month;
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

    public function index()
    {
        $all = $this->model::with(['student.group','month'])->orderBy('id', 'DESC')->get();
        $model = $this->modelName;
        return view("admin.pages.{$this->modelName}.index",compact('all','model'));
    }

    public function edit($id)
    {
        $model = $this->modelName;
        $obj = $this->model::find($id);
        $months = Month::get();
        $students= Student::get(['id','name']);
        return view("admin.pages.{$this->modelName}.edit",compact('obj','model','months','students'));
    }


    public function groupPaymentPage()
    {
        $levels = Level::get();
        $months = Month::get();
        return view('admin.pages.payment.groupPaymentPage',compact('levels','months'));
    }

    public function groupPayment(Request $request)
    {
        $month_id = $request->month_id;
        $month_paid = $request->month_paid;
        $malazem_paid = $request->malazem_paid;
        $discount = $request->discount;
        $group = Group::find($request->group_id);
        $students = $group->students;
        $months = Month::get();
        return view('admin.pages.payment.groupPayment',compact('students','group','month_id','month_paid','malazem_paid','discount','months'));
    }

    public function payGroup(Request $request)
    {
        $students = Student::find($request->id);
        $months_paid = $request->month_paid;
        $malazems_paid = $request->malazem_paid;
        $discounts = $request->discount;
        $month_id = $request->month_id;
        foreach($students as $index => $student)
        {
            $student->payIn([
                'month_id' => $month_id,
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
        $months = Month::get();
        $students= Student::get(['id','name']);
        return view("admin.pages.{$this->modelName}.create",compact('model','levels','months','students'));
    }

    public function paymentBarcodeOrId(Request $request)
    {
        $request->validate([
            'month_id2' => 'required|exists:months,id',
            'month_paid2' => 'required|numeric',
            'malazem_paid2' => 'required|numeric',
        ]);
        $data = [
            'month_id' => $request->month_id2,
            'month_paid' => $request->month_paid2,
            'malazem_paid' => $request->malazem_paid2,
            'discount' => $request->discount2
        ];
        // dd($data);
        foreach($request->students as $id)
        {
            Student::find($id)->payIn($data);
        }
        Alert::success('Success', "تم انشاء دفع الطلاب في ذلك الشهر");
        return redirect()->back();
    }

    private function validation()
    {
        request()->validate([
            'month_id' => 'required|exists:months,id',
            'month_paid' => 'required|numeric',
            'malazem_paid' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'student_id' => 'required|int|exists:students,id',
        ]);
    }

    public function attReq()
    {
        return [
            'month_id' => request('month_id'),
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
