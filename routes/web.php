<?php

use App\Http\Controllers\ApprovalLevelController;
use App\Http\Controllers\Auth\ResetPasswordController;
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

Route::get('/set-password/{user}', [ResetPasswordController::class,'setPasswordForm'])->name('set-password-form');
Route::post('/set-password/{user}', [ResetPasswordController::class,'setPassword'])->name('set-password');


