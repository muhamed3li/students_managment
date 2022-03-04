<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\Exam\ExamDestroyRequest;
use App\Http\Requests\Admin\Exam\ExamStoreRequest;
use App\Http\Requests\Admin\Exam\ExamUpdateRequest;
use App\Models\Exam;
use App\Models\Group;
use App\Models\Level;
use RealRashid\SweetAlert\Facades\Alert;

class ExamController extends Controller
{
    public $model;


    public function __construct(Exam $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $all = $this->model::with(['level:id,name', 'group:id,name'])->orderBy('id', 'DESC')->get();
        return view("admin.pages.exam.index", compact('all'));
    }

    public function create()
    {
        $levels = Level::get(['id', 'name']);
        $groups = Group::get(['id', 'name']);
        return view("admin.pages.exam.create", compact('levels', 'groups'));
    }

    public function store(ExamStoreRequest $request)
    {
        $this->model::create([
            'name' => $request->name,
            'level_id' => $request->level_id,
            'group_id' => $request->group_id,
            'exam_date' => $request->exam_date,
            'exam_max' => $request->exam_max,
            'exam_min' => $request->exam_min
        ]);
        Alert::success('نجاح', "تم تسجيل الإمتحان بنجاح");
        return redirect()->back()->withInput();
    }

    public function edit(Exam $exam)
    {
        $levels = Level::get(['id', 'name']);
        $groups = Group::get(['id', 'name']);
        return view("admin.pages.exam.edit", compact('exam', 'levels', 'groups'));
    }

    public function update(ExamUpdateRequest $request, Exam $exam)
    {
        $exam->update([
            'name' => $request->name,
            'level_id' => $request->level_id,
            'group_id' => $request->group_id,
            'exam_date' => $request->exam_date,
            'exam_max' => $request->exam_max,
            'exam_min' => $request->exam_min
        ]);
        Alert::success('نجاح', "تم تعديل الإمتحان بنجاح");
        return redirect()->back();
    }

    public function destroy(ExamDestroyRequest $request, Exam $exam)
    {
        $exam->delete();
        Alert::success('نجاح', "تم حذف الإمتحان بنجاح");
        return redirect()->back();
    }

    public function deleteAll()
    {
        $this->model::getQuery()->delete();
        Alert::success('نجاح', "تم حذف كل الامتحانات");
        return redirect()->back();
    }
}
