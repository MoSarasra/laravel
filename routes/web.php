<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\departmentController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\leaveTypeController;
use App\Http\Controllers\leaveAppsController;
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
    return view('welcome');
});

Route::resource('/department', departmentController::class);

Route::resource('/leaveType', leaveTypeController::class);

Route::resource('/employees', employeeController::class);

Route::resource('/leaveApps', leaveAppsController::class);
