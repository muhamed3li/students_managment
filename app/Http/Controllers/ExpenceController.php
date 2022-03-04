<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\Expence\ExpenceDestroyRequest;
use App\Http\Requests\Admin\Expence\ExpenceStoreRequest;
use App\Http\Requests\Admin\Expence\ExpenceUpdateRequest;
use App\Models\Expence;
use RealRashid\SweetAlert\Facades\Alert;

class ExpenceController extends Controller
{
    public $model;

    public function __construct(Expence $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $all = $this->model::orderBy('id', 'DESC')->get();
        return view("admin.pages.expence.index", compact('all'));
    }

    public function create()
    {
        return view("admin.pages.expence.create");
    }

    public function store(ExpenceStoreRequest $request)
    {
        $this->model::create([
            'name' => $request->name,
            'reason' => $request->reason,
            'amount' => $request->amount,
            'date' => $request->date,
        ]);
        Alert::success('نجاح', "تم تسجيل المصروف بنجاح");
        return redirect()->back()->withInput();
    }

    public function edit(Expence $expence)
    {
        return view("admin.pages.expence.edit", compact('expence'));
    }

    public function update(ExpenceUpdateRequest $request, Expence $expence)
    {
        $expence->update([
            'name' => $request->name,
            'reason' => $request->reason,
            'amount' => $request->amount,
            'date' => $request->date,
        ]);
        Alert::success('نجاح', "تم تعديل المصروف بنجاح");
        return redirect()->back();
    }

    public function destroy(ExpenceDestroyRequest $request, Expence $expence)
    {
        $expence->delete();
        Alert::success('نجاح', "تم حذف المصروف بنجاح");
        return redirect()->back();
    }

    public function deleteAll()
    {
        $this->model::getQuery()->delete();
        Alert::success('نجاح', "تم حذف كل المصروفات");
        return redirect()->back();
    }
}
