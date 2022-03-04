<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\Group\GroupDestroyRequest;
use App\Http\Requests\Admin\Group\GroupStoreRequest;
use App\Http\Requests\Admin\Group\GroupUpdateRequest;
use App\Http\Traits\CrudTrait;
use App\Models\Group;
use App\Models\Level;
use App\Models\Time;
use RealRashid\SweetAlert\Facades\Alert;

class GroupController extends Controller
{
    public $model;

    public function __construct(Group $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $all = $this->model::with(['level:id,name', 'time'])->orderBy('id', 'DESC')->get();
        return view("admin.pages.group.index", compact('all'));
    }

    public function create()
    {
        $levels = Level::get();
        $times = Time::doesntHave('group')->get();
        return view("admin.pages.group.create", compact('levels', 'times'));
    }

    public function store(GroupStoreRequest $request)
    {
        $this->model::create([
            'name' => $request->name,
            'level_id' => $request->level_id,
            'time_id' => $request->time_id,
        ]);
        Alert::success('نجاح', "تم تسجيل المجموعة بنجاح");
        return redirect()->back()->withInput();
    }

    public function edit(Group $group)
    {
        $levels = Level::get();
        $times = Time::doesntHave('group')->get();
        return view("admin.pages.group.edit", compact('group', 'levels', 'times'));
    }

    public function update(GroupUpdateRequest $request, Group $group)
    {
        $group->update([
            'name' => $request->name,
            'level_id' => $request->level_id,
            'time_id' => $request->time_id,
        ]);
        Alert::success('نجاح', "تم تعديل المجموعة بنجاح");
        return redirect()->back();
    }

    public function destroy(GroupDestroyRequest $request, Group $group)
    {
        $group->delete();
        Alert::success('نجاح', "تم حذف المجموعة بنجاح");
        return redirect()->back();
    }

    public function deleteAll()
    {
        $this->model::getQuery()->delete();
        Alert::success('نجاح', "تم حذف كل المجاميع");
        return redirect()->back();
    }

    public function getStudents(Group $group)
    {
        $students = $group->students;
        echo json_encode($students);
    }

    public function getHomework(Group $group)
    {
        $homework = $group->homework;
        echo json_encode($homework);
    }

    public function getExams(Group $group)
    {
        $groups = $group->exams;
        echo json_encode($groups);
    }
}
