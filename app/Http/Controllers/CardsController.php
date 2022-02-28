<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Level;
use App\Models\Student;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    public function index()
    {
        return view('admin.pages.student.cards.index');
    }

    public function someStudentsPage()
    {
        $levels = Level::get();
        return view('admin.pages.student.cards.someStudentsCards', compact('levels'));
    }

    public function printSomeStudentsPage(Request $request)
    {
        $students = Student::findMany($request->students);
        return view('admin.pages.student.cards.printSomeStudentsCards', compact('students'));
    }

    public function printSomeSmallPrinterPage()
    {
        $levels = Level::get();
        return view('admin.pages.student.cards.printSomeSmallPrinterPage', compact('levels'));
    }

    public function printSomeSmallPrinter(Request $request)
    {
        $students = Student::findMany($request->students);
        return view('admin.pages.student.cards.printSomeSmallPrinter', compact('students'));
    }

    public function groupStudentsPage()
    {
        $levels = Level::get();
        return view('admin.pages.student.cards.groupStudentsPage', compact('levels'));
    }

    public function printGroupStudentsPage(Request $request)
    {
        $students = Group::find($request->group_id)->students;
        return view('admin.pages.student.cards.printSomeStudentsCards', compact('students'));
    }

    public function levelStudentsPage()
    {
        $levels = Level::get();
        return view('admin.pages.student.cards.levelStudentsPage', compact('levels'));
    }

    public function printLevelStudentsPage(Request $request)
    {
        $students = Level::find($request->level_id)->students;
        return view('admin.pages.student.cards.printSomeStudentsCards', compact('students'));
    }
}
