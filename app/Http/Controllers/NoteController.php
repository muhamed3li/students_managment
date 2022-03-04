<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\Note\NoteDestroyRequest;
use App\Http\Requests\Admin\Note\NoteStoreRequest;
use App\Http\Requests\Admin\Note\NoteUpdateRequest;
use App\Models\Group;
use App\Models\Level;
use App\Models\Note;
use App\Models\Student;
use RealRashid\SweetAlert\Facades\Alert;

class NoteController extends Controller
{
    public $model;

    public function __construct(Note $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $all = $this->model::with('student:id,name')->orderBy('id', 'DESC')->get();
        return view("admin.pages.note.index", compact('all'));
    }

    public function create()
    {
        $levels = Level::get(['id', 'name']);
        $groups = Group::get(['id', 'name']);
        $students = Student::get(['id', 'name']);
        return view("admin.pages.note.create", compact('levels', 'groups', 'students'));
    }

    public function store(NoteStoreRequest $request)
    {
        $this->model::create([
            'student_id' => $request->student_id,
            'note' => $request->note,
        ]);
        Alert::success('نجاح', "تم تسجيل الملاحظه بنجاح");
        return redirect()->back()->withInput();
    }

    public function edit(Note $note)
    {
        $students = Student::get(['id', 'name']);
        return view("admin.pages.note.edit", compact('note', 'students'));
    }

    public function update(NoteUpdateRequest $request, Note $note)
    {
        $note->update([
            'student_id' => $request->student_id,
            'note' => $request->note,
        ]);
        Alert::success('نجاح', "تم تعديل الملاحظه بنجاح");
        return redirect()->back();
    }

    public function destroy(NoteDestroyRequest $request, Note $note)
    {
        $note->delete();
        Alert::success('نجاح', "تم حذف الملاحظه بنجاح");
        return redirect()->back();
    }

    public function deleteAll()
    {
        $this->model::getQuery()->delete();
        Alert::success('نجاح', "تم حذف كل الملاحظات");
        return redirect()->back();
    }
}
