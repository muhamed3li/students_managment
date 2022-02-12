<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentReportController extends Controller
{
    public function allStudents()
    {
        return view('admin.pages.reports.students.index');
    }
}
