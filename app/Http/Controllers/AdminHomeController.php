<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Homework;
use App\Models\Payment;

class AdminHomeController extends Controller
{
    public function index()
    {
        $x = Group::find(44);

        // dd($x->homework);
        return view('admin.pages.home.index');
    }
}