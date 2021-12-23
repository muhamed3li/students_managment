<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\TimeController;
use App\Models\Level;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.welcome');
});

Route::resource('department',DepartmentController::class);

Route::resource('attendance',AttendanceController::class);

Route::prefix('groups')->group(function(){
    Route::resource('group',GroupController::class);
    Route::resource('time',TimeController::class);
});

Route::resource('level',LevelController::class);