<?php

use App\Http\Controllers\ApprovalLevelController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LeaveApplicationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('approval-levels', ApprovalLevelController::class)->middleware('can:canManageApprovalLevels');

Route::get('/set-password/{user}', [ResetPasswordController::class, 'setPasswordForm'])->name('set-password-form');
Route::post('/set-password/{user}', [ResetPasswordController::class, 'setPassword'])->name('set-password');
Route::get('/leave/{leaveApplication}/details', [LeaveApplicationController::class, 'details'])->name('leave.details');
Route::post('/leave/{leaveApplication}/approve', [LeaveApplicationController::class, 'approveLeave'])->name('leave.approve');


Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->name('employees.update');
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');
Route::get('/employees/{employee}', [EmployeeController::class, 'show'])->name('employees.show');

