<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\Month\MonthDestoyRequest;
use App\Http\Requests\Admin\Month\MonthStoreRequest;
use App\Http\Requests\Admin\Month\MonthUpdateRequest;
use App\Models\Month;
use RealRashid\SweetAlert\Facades\Alert;

class MonthController extends Controller
{
    public function index()
    {
        $all = Month::orderBy('created_at','desc')->get();
        return view('admin.pages.month.index',compact('all'));
    }

    public function create()
    {
        return view('admin.pages.month.create');
    }

    public function store(MonthStoreRequest $request)
    {
        Month::create($request->validated());
        Alert::success('Success', "تمت اضافة الشهر");
        return redirect()->back();
    }

    public function edit(Month $month)
    {
        return view('admin.pages.month.edit',compact('month'));
    }

    public function update(MonthUpdateRequest $request,Month $month)
    {
        $month->update($request->validated());
        Alert::success('Success', "تمت عملية التعديل على الشهر");
        return redirect()->back();
    }

    public function destroy(MonthDestoyRequest $request,Month $month)
    {
        $month->delete();
        Alert::success('Success', "تم حذف الشهر بنجاح");
        return redirect()->back();
    }

    public function deleteAll()
    {
        Month::getQuery()->delete();
        Alert::success('Success', "تم حذف كل الشهور");
        return redirect()->back();
    }
}