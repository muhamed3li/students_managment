<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\HomeworkSolution\HomeworkSolutionDeleteRequest;
use App\Http\Requests\Admin\HomeworkSolution\HomeworkSolutionStoreRequest;
use App\Http\Requests\Admin\HomeworkSolution\HomeworkSolutionUpdateRequest;
use App\Models\Group;
use App\Models\Homework;
use App\Models\HomeworkSolution;
use App\Models\Level;
use App\Models\Student;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\Console\Input\Input;

class HomeworkSolutionController extends Controller
{
    public function index()
    {
        $all = HomeworkSolution::orderBy('created_at','desc')->get();
        return view('admin.pages.homeworkSolution.index',compact('all'));
    }

    public function groupAttendancePage()
    {
        $levels = Level::get();
        return view('admin.pages.homeworkSolution.groupAttendancePage',compact('levels'));
    }

    public function groupAttendance(Request $request)
    {
        $homework = Homework::find($request->homework_id);
        $group = Group::find($request->group_id);
        $students = $group->students;
        return view('admin.pages.homeworkSolution.groupAttendance',compact('homework','students','group'));
    }

    public function attendGroup(Request $request,Homework $homework)
    {
        $students = Student::find($request->id);
        $degrees = $request->degree;
        foreach($students as $index => $student)
        {
            $student->solveHomework($homework->id,$degrees[$index],today());
        }

        Alert::success('Success', "تم تحضير الطلاب في ذلك الإمتحان");
        return redirect(route('homeworkSolution.groupAttendancePage'));
    }

    public function homeworkSolutionByBarcodeOrId(Request $request)
    {
        $request->validate([
            'homework_id2' => 'integer',
            'group_id2' => 'integer',
            'students' => 'required'
        ]);
        foreach($request->students as $id)
        {
            Student::find($id)->solveHomework($request->homework_id2,$request->degree2,$request->solved_at2);
        }
        Alert::toast('Toast Message', 'success');
        return redirect()->back()->withInput();
    }

    public function create()
    {
        $levels = Level::get();
        $groups = Group::get();
        $homeworks = Homework::get();
        return view('admin.pages.homeworkSolution.create',compact('levels','groups','homeworks'));
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
