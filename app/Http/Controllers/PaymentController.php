<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\Payment\PaymentDestroyRequest;
use App\Http\Requests\Admin\Payment\PaymentGroupPayRequest;
use App\Http\Requests\Admin\Payment\PaymentGroupRequest;
use App\Http\Requests\Admin\Payment\PaymentStoreRequest;
use App\Http\Requests\Admin\Payment\PaymentUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Level;
use App\Models\Month;
use App\Models\Payment;
use App\Models\Student;
use RealRashid\SweetAlert\Facades\Alert;

class PaymentController extends Controller
{
    public $model;

    public function __construct(Payment $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $all = $this->model::with(['student.group:id,name', 'month:id,name'])->orderBy('id', 'DESC')->get();
        return view("admin.pages.payment.index", compact('all'));
    }

    public function create()
    {
        $levels = Level::get(['id', 'name']);
        $groups = Level::get(['id', 'name']);
        $months = Month::get(['id', 'name']);
        $students = Student::get(['id', 'name']);
        return view("admin.pages.payment.create", compact('levels', 'months', 'students', 'groups'));
    }

    public function store(PaymentStoreRequest $request)
    {
        $data = [
            'month_id' => $request->month_id,
            'month_paid' => $request->month_paid,
            'malazem_paid' => $request->malazem_paid,
            'discount' => $request->discount,
        ];
        Student::find($request->student_id)->payIn($data);
        Alert::success('نجاح', "تم تسجيل الدفع بنجاح");
        return redirect()->back()->withInput();
    }

    public function edit(Payment $payment)
    {
        $months = Month::get(['id', 'name']);
        $students = Student::get(['id', 'name']);
        return view("admin.pages.payment.edit", compact('payment', 'months', 'students'));
    }

    public function update(PaymentUpdateRequest $request, Payment $payment)
    {
        $payment->update([
            'month_id' => $request->month_id,
            'month_paid' => $request->month_paid,
            'malazem_paid' => $request->malazem_paid,
            'discount' => $request->discount,
            'student_id' => $request->student_id,
            'total' => ($request->month_paid + $request->malazem_paid - $request->discount)
        ]);
        Alert::success('نجاح', "تم تعديل الدفع بنجاح");
        return redirect()->back();
    }

    public function destroy(PaymentDestroyRequest $request, Payment $payment)
    {
        $payment->delete();
        Alert::success('نجاح', "تم حذف الدفع بنجاح");
        return redirect()->back();
    }

    public function deleteAll()
    {
        $this->model::getQuery()->delete();
        Alert::success('نجاح', "تم حذف كل المدفوعات");
        return redirect()->back();
    }


    public function groupPaymentPage()
    {
        $levels = Level::get(['id', 'name']);
        $months = Month::get(['id', 'name']);
        return view('admin.pages.payment.groupPaymentPage', compact('levels', 'months'));
    }

    public function groupPayment(PaymentGroupRequest $request)
    {
        $month_id = $request->month_id;
        $month_paid = $request->month_paid;
        $malazem_paid = $request->malazem_paid;
        $discount = $request->discount;
        $group = Group::find($request->group_id);
        $students = $group->students;
        $months = Month::get();
        return view('admin.pages.payment.groupPayment', compact('students', 'group', 'month_id', 'month_paid', 'malazem_paid', 'discount', 'months'));
    }

    public function payGroup(PaymentGroupPayRequest $request)
    {
        $students = Student::find($request->id);
        $months_paid = $request->month_paid;
        $malazems_paid = $request->malazem_paid;
        $discounts = $request->discount;
        $month_id = $request->month_id;
        foreach ($students as $index => $student) {
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
        foreach ($request->students as $id) {
            Student::find($id)->payIn($data);
        }
        Alert::success('Success', "تم انشاء دفع الطلاب في ذلك الشهر");
        return redirect()->back();
    }
}
