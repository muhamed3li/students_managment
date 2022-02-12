<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\Homework\HomeworkDestroyRequest;
use App\Http\Requests\Admin\Homework\HomeworkStoreRequest;
use App\Http\Requests\Admin\Homework\HomeworkUpdateRequest;
use App\Models\Homework;
use App\Models\Level;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeworkController extends Controller
{
    public function index()
    {
        $all = Homework::orderBy('created_at','desc')->get();
        return view('admin.pages.homework.index',compact('all'));
    }

    public function create()
    {
        $levels = Level::get();
        return view('admin.pages.homework.create',compact('levels'));
    }

    public function store(HomeworkStoreRequest $request)
    {
        Homework::create($request->validated());
        Alert::success('Success', "تمت اضافة الواجب");
        return redirect()->back();
    }

    public function edit(Homework $homework)
    {
        return view('admin.pages.homework.edit',compact('homework'));
    }

    public function update(HomeworkUpdateRequest $request,Homework $homework)
    {
        $homework->update($request->validated());
        Alert::success('Success', "تمت عملية التعديل الواجب");
        return redirect()->back();
    }

    public function destroy(HomeworkDestroyRequest $request,Homework $homework)
    {
        $homework->delete();
        Alert::success('Success', "تم حذف الواجب بنجاح");
        return redirect()->back();
    }

    public function deleteAll()
    {
        Homework::getQuery()->delete();
        Alert::success('Success', "تم حذف كل الواجب");
        return redirect()->back();
    }
}
