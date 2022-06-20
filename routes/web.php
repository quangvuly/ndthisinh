<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\myAdminController;
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


// Route::get('danh-sach-thu-tuc', [myHomeController::class, 'ListThutucPage'])->name('url.listThutuc'); 
// Route::post('tim-kiem-thu-tuc', [myHomeController::class, 'SearchListThutucPage'])->name('url.SearchlistThutuc'); 
// Route::get('chi-tiet-thu-tuc/{id}', [myHomeController::class, 'DetailThutucPage'])->name('url.detailThutuc')->middleware(['auth']); 
// Route::get('nop-hs-thu-tuc/{id}', [myHomeController::class, 'viewFile'])->name('url.upload_viewThutuc')->middleware(['auth']);
// Route::post('nop-hs-thu-tuc/{id}', [myHomeController::class, 'storeFile'])->name('url.upload_detailThutuc')->middleware(['auth']);
// Route::post('kiem-tra-thu-tuc', [myHomeController::class, 'checkCode'])->name('url.checkThutuc'); 
// Route::get('/403-forbidden', function () {
//     return view('client.403');
// })->name('url.403');



// Route::prefix('admin')->middleware(['adminLogin'])->group(function () {

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('url.dashboard');

    Route::get('mon-thi', [myAdminController::class, 'getMonthi'])->name('url.admin.monthi'); 
    // Route::get('linh-vuc', [myAdminController::class, 'getLinhvuc'])->name('url.admin.linhvuc'); 
    // Route::get('thu-tuc', [myAdminController::class, 'getThutuc'])->name('url.admin.thutuc'); 
    Route::get('tao-moi-mon-thi', [myAdminController::class, 'createMonthi'])->name('url.admin.createmonthi'); 
    Route::post('tao-moi-mon-thi', [myAdminController::class, 'saveMonthi'])->name('url.admin.savemonthi');
    Route::get('chinh-sua-mon-thi/{id}', [myAdminController::class, 'editMonthi'])->name('url.admin.editmonthi'); 
    Route::post('chinh-sua-mon-thi/{id}', [myAdminController::class, 'updateMonthi'])->name('url.admin.updatemonthi');
    
    // Route::get('chinh-sua-thu-tuc/{id}', [myAdminController::class, 'getEditThutuc'])->name('url.admin.editthutuc'); 
    // Route::post('chinh-sua-thu-tuc/{id}', [myAdminController::class, 'updateEditThutuc'])->name('url.admin.updatethutuc'); 
    Route::get('xoa-mon-thi/{id}', [myAdminController::class, 'deleteMonthi'])->name('url.admin.deletemonthi'); 
    
    Route::get('danh-sach/{id}', [myAdminController::class, 'getThisinh'])->name('url.admin.thisinh');

    // Route::get('update-schedule', [myAdminController::class, 'updateSchedule'])->name('url.admin.schedule');

    // Route::get('theo-doi-quy-trinh', [myAdminController::class, 'getSchedule'])->name('url.admin.schedule_follow'); 
    // Route::get('thong-ke', [myAdminController::class, 'getReport'])->name('url.admin.report'); 
    // Route::post('thong-ke', [myAdminController::class, 'searchReport'])->name('url.admin.report_search'); 

    // Route::get('xu-ly-ho-so/{id}', [myAdminController::class, 'getProcessHS'])->name('url.admin.processHS');
    // Route::post('xu-ly-ho-so/{id}', [myAdminController::class, 'updateProcessHS'])->name('url.admin.update_processHS');

    // Route::get('test-voice',[TextToSpeech::class,'testVoice']);
});