<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\QrCode\PrintSomeQrRequest;
use App\Models\Level;
use Illuminate\Http\Request;

class QrCodeController extends Controller
{
    public function index()
    {
        return view('admin.pages.qrcode.index');
    }

    public function printSomeSmallPrinterPage()
    {
        $levels = Level::get();
        return view('admin.pages.qrcode.printSomeSmallPrinterPage', compact('levels'));
    }

    public function printSomeSmallPrinter(PrintSomeQrRequest $request)
    {
        $data = $request->validated();
        $data['level_id'] = Level::select('name')->find($data['level_id'])->name;
        return view('admin.pages.qrcode.printSomeSmallPrinter', compact('data'));
    }

    public function printSomeBigPrinterPage()
    {
        $levels = Level::get();
        return view('admin.pages.qrcode.printSomeBigPrinterPage', compact('levels'));
    }

    public function printSomeBigPrinter(PrintSomeQrRequest $request)
    {
        $data = $request->validated();
        $data['level_id'] = Level::find($data['level_id'])->get('name');
        return view('admin.pages.qrcode.printSomeBigPrinter', compact('data'));
    }
}
