<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\Level\LevelDeleteRequest;
use App\Http\Requests\Admin\Level\LevelStoreRequest;
use App\Http\Requests\Admin\Level\LevelUpdateRequest;
use App\Http\Traits\CrudTrait;
use App\Models\Level;
use RealRashid\SweetAlert\Facades\Alert;

class LevelController extends Controller
{
    public $model;

    public function __construct(Level $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $all = $this->model::orderBy('id', 'DESC')->get();
        return view("admin.pages.level.index", compact('all'));
    }

    public function create()
    {
        return view("admin.pages.level.create");
    }

    public function store(LevelStoreRequest $request)
    {
        $this->model::create([
            'name' => $request->name,
            'malazem_cost' => $request->malazem_cost,
            'month_cost' => $request->month_cost,
        ]);
        Alert::success('نجاح', "تم تسجيل المستوى بنجاح");
        return redirect()->back()->withInput();
    }

    public function edit(Level $level)
    {
        return view("admin.pages.level.edit", compact('level'));
    }

    public function update(LevelUpdateRequest $request, Level $level)
    {
        $level->update([
            'name' => $request->name,
            'malazem_cost' => $request->malazem_cost,
            'month_cost' => $request->month_cost,
        ]);
        Alert::success('نجاح', "تم تعديل المستوى بنجاح");
        return redirect()->back();
    }

    public function destroy(LevelDeleteRequest $request, Level $level)
    {
        $level->delete();
        Alert::success('نجاح', "تم حذف المستوى بنجاح");
        return redirect()->back();
    }

    public function deleteAll()
    {
        $this->model::getQuery()->delete();
        Alert::success('نجاح', "تم حذف كل المستويات");
        return redirect()->back();
    }

    public function getLevelById(Level $level)
    {
        echo json_encode($level);
    }

    public function getGroups(Level $level)
    {
        $groups = $level->groups;
        echo json_encode($groups);
    }
}
