<?php

namespace App\Http\Controllers;

class AdminHomeController extends Controller
{
    public function index()
    {
        return view('admin.pages.home.index');
    }
}
