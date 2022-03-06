<?php

namespace App\Http\Controllers;

use App\Events\StudentNotPay;
use App\Models\Group;
use App\Models\Homework;
use App\Models\Payment;
use App\Models\User;

class AdminHomeController extends Controller
{
    public function index()
    {
        $user = User::first();
        event(new StudentNotPay($user));
        return view('admin.pages.home.index');
    }
}
