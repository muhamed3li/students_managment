<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Level;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class BarcodeController extends Controller
{
    public function index()
    {
        return view('admin.pages.student.barcode.index');
    }

    public function someStudentsPage()
    {
        $levels = Level::get();
        return view('admin.pages.student.barcode.someStudentsBarcode',compact('levels'));
    }

    public function printSomeStudentsPage(Request $request)
    {
        $students = Student::findMany($request->students);
        return view('admin.pages.student.barcode.printSomeStudentsBarcode',compact('students'));
    }

    public function groupStudentsPage()
    {
        $levels = Level::get();
        return view('admin.pages.student.barcode.groupStudentsPage',compact('levels'));
    }

    public function printGroupStudentsPage(Request $request)
    {
        $students = Group::find($request->group_id)->students;
        return view('admin.pages.student.barcode.printSomeStudentsBarcode',compact('students'));
    }

    public function levelStudentsPage()
    {
        $levels = Level::get();
        return view('admin.pages.student.barcode.levelStudentsPage',compact('levels'));
    }

    public function printLevelStudentsPage(Request $request)
    {
        $students = Level::find($request->level_id)->students;
        return view('admin.pages.student.barcode.printSomeStudentsBarcode',compact('students'));
    }

    public function generateBarcode(Request $request){
        $user = User::find(2);
        return view('admin.assets.allBarcodes')->with('user',$user);
    }

    public function printSinlgeBarcode(Student $student)
    {
        return view('admin.assets.sinlgeBarcode',[
            'student' => $student
        ]);
    }
}
