<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class BarcodeController extends Controller
{
    public function generateBarcode(Request $request){
        // $id = $request->get('id');
        $user = User::find(2);
        return view('admin.assets.allBarcodes')->with('user',$user);
        // return view('admin.assets.barcode')->with('user',$user);
    }

    public function printSinlgeBarcode(Student $student)
    {
        return view('admin.assets.sinlgeBarcode',[
            'student' => $student
        ]);
    }
}
