<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\HomeworkSolution\HomeworkSolutionDeleteRequest;
use App\Http\Requests\Admin\HomeworkSolution\HomeworkSolutionStoreRequest;
use App\Http\Requests\Admin\HomeworkSolution\HomeworkSolutionUpdateRequest;
use App\Models\HomeworkSolution;
use App\Models\Level;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeworkSolutionController extends Controller
{
    public function index()
    {
        $all = HomeworkSolution::orderBy('created_at','desc')->get();
        return view('admin.pages.homeworkSolution.index',compact('all'));
    }

    public function create()
    {
        $levels = Level::get();
        return view('admin.pages.homeworkSolution.create',compact('levels'));
    }

    public function store(HomeworkSolutionStoreRequest $request)
    {
        HomeworkSolution::create($request->validated());
        Alert::success('Success', "تمت اضافة حل لواجب");
        return redirect()->back();
    }

    public function edit(HomeworkSolution $homeworkSolution)
    {
        return view('admin.pages.homeworkSolution.edit',compact('homeworkSolution'));
    }

    public function update(HomeworkSolutionUpdateRequest $request,HomeworkSolution $homeworkSolution)
    {
        $homeworkSolution->update($request->validated());
        Alert::success('Success', "تمت عملية التعديل حل الواجب");
        return redirect()->back();
    }

    public function destroy(HomeworkSolutionDeleteRequest $request,HomeworkSolution $homeworkSolution)
    {
        $homeworkSolution->delete();
        Alert::success('Success', "تم حذف حل الواجب بنجاح");
        return redirect()->back();
    }

    public function deleteAll()
    {
        HomeworkSolution::getQuery()->delete();
        Alert::success('Success', "تم حذف كل حلول الواجب");
        return redirect()->back();
    }
}
