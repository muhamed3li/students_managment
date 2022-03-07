<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\Homework\HomeworkDestroyRequest;
use App\Http\Requests\Admin\Homework\HomeworkStoreRequest;
use App\Http\Requests\Admin\Homework\HomeworkUpdateRequest;
use App\Models\Group;
use App\Models\Homework;
use App\Models\Level;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeworkController extends Controller
{
    public function index()
    {
        $all = Homework::with(['level:id,name', 'group:id,name'])->orderBy('created_at', 'desc')->get();
        return view('admin.pages.homework.index', compact('all'));
    }

    public function create()
    {
        $levels = Level::get(['id', 'name']);
        $groups = Group::get(['id', 'name']);
        return view('admin.pages.homework.create', compact('levels', 'groups'));
    }

    public function store(HomeworkStoreRequest $request)
    {
        Homework::create([
            'name' => $request->name,
            'homework_max' => $request->homework_max,
            'homework_min' => $request->homework_min,
            'level_id' => $request->level_id,
            'group_id' => $request->group_id,
            'deadline' => $request->deadline,
        ]);
        Alert::success('Success', "تمت اضافة الواجب");
        return redirect()->back()->withInput();
    }

    public function edit(Homework $homework)
    {
        return view('admin.pages.homework.edit', compact('homework'));
    }

    public function update(HomeworkUpdateRequest $request, Homework $homework)
    {
        $homework->update([
            'name' => $request->name,
            'homework_max' => $request->homework_max,
            'homework_min' => $request->homework_min,
            'deadline' => $request->deadline,
        ]);
        Alert::success('Success', "تمت عملية التعديل الواجب");
        return redirect()->back();
    }

    public function destroy(HomeworkDestroyRequest $request, Homework $homework)
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
