<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\myAdminController;
use App\Http\Controllers\myAuthenticateController;
use App\Http\Controllers\Client\myClientController;
use App\Http\Middleware\AdminLoginMiddleware;

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

#-------- URL Client - Frontend Website
Route::get('/', [myAdminController::class, 'getMonthiHomepage'])->name('url.homepage'); 
Route::get('ghi-danh/{id}', [myClientController::class, 'DetailExamUser'])->name('url.detailexamuser')->middleware(['auth']);
Route::get('ghi-danh-email/{id}', [myClientController::class, 'SubmitDetailExamUser'])->name('url.upload_detailexamuser')->middleware(['auth']);
Route::get('/403-forbidden', function () {
    return view('client.403');
})->name('url.403');
#-------- URL Client - Open camera recognize page
Route::get('nhan-dang', function () {
    return view('client.camera_ui');
});

Route::post('ma-code',[myClientController::class, 'submitCode'])->name('url.submit_code');


Route::prefix('admin')->middleware(['adminLogin'])->group(function () {
    Route::get('/', [myAdminController::class, 'getDashboard'])->name('url.dashboard');
    Route::get('mon-thi', [myAdminController::class, 'getMonthi'])->name('url.admin.monthi'); 
    Route::get('tao-moi-mon-thi', [myAdminController::class, 'createMonthi'])->name('url.admin.createmonthi'); 
    Route::post('tao-moi-mon-thi', [myAdminController::class, 'saveMonthi'])->name('url.admin.savemonthi');
    Route::get('chinh-sua-mon-thi/{id}', [myAdminController::class, 'editMonthi'])->name('url.admin.editmonthi'); 
    Route::post('chinh-sua-mon-thi/{id}', [myAdminController::class, 'updateMonthi'])->name('url.admin.updatemonthi');
    Route::get('xoa-mon-thi/{id}', [myAdminController::class, 'deleteMonthi'])->name('url.admin.deletemonthi'); 
    Route::get('danh-sach/{id}', [myAdminController::class, 'getThisinh'])->name('url.admin.thisinh');
    Route::get('update-schedule', [myAdminController::class, 'updateSchedule'])->name('url.admin.schedule');
    Route::get('danh-sach-ra-vao', [myAdminController::class, 'getSchedule'])->name('url.admin.getschedule');
});

Route::get('dang-ky', [myAuthenticateController::class, 'showRegister'])->name('url.myregister');
Route::post('dang-ky', [myAuthenticateController::class, 'updateRegister'])->name('url.update.myregister');
Route::get('signout', [myAuthenticateController::class, 'signOut'])->name('signout');
Auth::routes();