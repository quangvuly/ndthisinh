<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MonthiModel;
use App\Models\User;
// use App\Models\LinhvucModel;
// use App\Models\DonviModel;
// use App\Models\NophsModel;
use DateTime;
use File;
// use Illuminate\Support\Facades\Mail;
// use App\Mail\myMail;

 

class myAdminController extends Controller
{
    public function getMonthiHomepage() {
        $listMonthi = MonthiModel::get();
        $countMonthi = count($listMonthi);

        return view('client.homepage',[
            'monthi' => $listMonthi,
            'tong' =>  $countMonthi
        ]);
    }


    public function getMonthi() {
        $listMonthi = MonthiModel::get();
        $countMonthi = count($listMonthi);
        return view('admin.monthi',[
            'monthi' => $listMonthi,
            'tong' =>  $countMonthi
        ]);
    }

    // public function getLinhvuc() {
    //     $listLinhvuc = LinhvucModel::with('donvi')->get();
    //     $countLinhvuc = count($listLinhvuc);
    //     return view('admin.linhvuc',[
    //         'linhvuc' => $listLinhvuc,
    //         'tong' =>  $countLinhvuc
    //     ]);
    // }

    // public function getThutuc() {
    //     $listThutuc = ThutucModel::with('linhvuc')->get();
    //     $countThutuc = count($listThutuc);
    //     return view('admin.thutuc',[
    //         'thutuc' => $listThutuc,
    //         'tong' =>  $countThutuc
    //     ]);
    // }

    public function createMonthi() {
        // $listLinhvuc = LinhvucModel::with('donvi')->get();
        return view('admin.monthi_create');
    }

    public function saveMonthi(Request $request) {
        $newMonthi = new MonthiModel;
        $newMonthi->name = $request->txtTenmonthi;
        $newMonthi->descript = $request->txtMota;
        $newMonthi->location = $request->txtDiadiem;
        $newMonthi->time_exam = $request->txtTimeexam;
        $newMonthi->created_at = new DateTime();
        $newMonthi->total = $request->txtSoluong;
        $newMonthi->descript = $request->txtDescript;
        $result = $newMonthi->save();

        return redirect()->route('url.admin.monthi');

    }

    public function editMonthi($id) {
        $editMonthi = MonthiModel::find($id);
        return view('admin.monthi_edit',[
            'monthi' => $editMonthi
        ]);
    }

    public function updateMonthi(Request $request, $id) {
        $editMonthi = MonthiModel::find($id);
        $editMonthi->name = $request->txtTenmonthi;
        $editMonthi->descript = $request->txtMota;
        $editMonthi->location = $request->txtDiadiem;
        $editMonthi->time_exam = $request->txtTimeexam;
        $editMonthi->updated_at = new DateTime();
        $editMonthi->total = $request->txtSoluong;
        $editMonthi->descript = $request->txtDescript;
        $result = $editMonthi->save();
        return redirect()->route('url.admin.monthi');
    }

    public function deleteMonthi($id) {
        $listMonthi = MonthiModel::find($id)->delete();
        return redirect()->route('url.admin.monthi');
    }


    public function getThisinh($id) {
        $listThisinh = MonthiModel::find($id)->thisinh()->get();
        $monthi = MonthiModel::find($id);


        $count = MonthiModel::find($id)->thisinh()->get()->count();
        $count = $monthi->total - $count;
        return view('admin.thisinh',[
            'thisinh' => $listThisinh,
            'monthi' =>  $monthi,
            'solai' => $count
        ]);
    }


    // public function getEditThutuc(Request $request, $id) {
    //     $listLinhvuc = LinhvucModel::with('donvi')->get();
    //     $editThutuc = ThutucModel::find($id);
    //     return view('admin.editthutuc',[
    //         'currentThutuc' => $editThutuc,
    //         'linhvuc' => $listLinhvuc
    //     ]);
    // }

    // public function updateEditThutuc(Request $request, $id) {

    //     $updateThutuc = ThutucModel::find($id);
    //     $updateThutuc->tt_name = $request->txtTenThutuc;
    //     $updateThutuc->tt_level = $request->sltMucdo;
    //     $updateThutuc->linhvuc_id = $request->sltLinhvuc;
    //     $updateThutuc->tt_chitiet = $request->tarThutuc;
    //     $updateThutuc->updated_at = new DateTime();
    //     $result = $updateThutuc->save();

    //     return redirect()->route('url.admin.thutuc');
    // }

    // public function updateSchedule() {
    //     $nhs = NophsModel::with('usersubmit','thutuc')->where('nhs_status',3)->orderByDesc('updated_at')->get();
    //     return response()->json(['data' =>$nhs], 201);
    // }

    // public function getSchedule() {
    //     return view('admin.schedule');
    // }

    // public function getReport() {
    //     $nhs = NophsModel::with('usersubmit','thutuc')->orderBy('updated_at')->get();
    //     return view('admin.report',['data' => $nhs]);
    // }

    // // SearchReportRequest
    // public function searchReport(Request $request) {
    //     $fromDate = $request->txtFromdate;
    //     $toDate = $request->txtTodate;
    //     $status = $request->sltStatus;

    //     $nhs = NophsModel::with('usersubmit','thutuc')->whereBetween('created_at',[$fromDate,$toDate])->where('nhs_status',$status)->orderBy('updated_at')->get();
    //     return view('admin.report_search', ['data' => $nhs]);
    // }

    // public function getProcessHS($id) {
    //     $nhs = NophsModel::with('usersubmit','thutuc')->where('id',$id)->first();
        
    //     $user_id = $nhs->user_id;
    //     $thutuc_id = $nhs->thutuc_id;
    //     $path = 'public/upload/'.$user_id.'/'.$thutuc_id;
  
    //     if(File::isDirectory($path)){
    //         $files = File::files($path);
    //         // dd($files[0]->getFilename());
    //     }

    //     return view('admin.detail_hs',[
    //         'data' => $nhs,
    //         'files' => $files,
    //         'user_id' => $user_id,
    //         'thutuc_id' => $thutuc_id
    //     ]);
    // }

    // public function updateProcessHS(Request $request, $id) {

    //     $updateNhs = NophsModel::find($id);
    //     $updateNhs->nhs_note = $request->txtNote;
    //     $updateNhs->updated_at = new DateTime();

    //     switch ($request->input('action')) {
    //         case 'subHople':
    //             $updateNhs->nhs_status = 2;
    //             break;

    //         case 'subHoanthanh':
    //             $updateNhs->nhs_status = 4;
    //             break;
    
    //         case 'subXuly':
    //             $updateNhs->nhs_status = 1;
    //             break;

    //         case 'subHoantra':
    //             $updateNhs->nhs_status = 0;
    //             break;
    
    //     }

    //     $result = $updateNhs->save();

    //     // Send email tự động

    //     $latest_hs = NophsModel::with('usersubmit','thutuc')->where('id',$id)->first();
    //     switch ($latest_hs->nhs_status) {
    //         case 0:
    //             $status_hs = 'Hoàn trả';
    //             break;
    //         case 1:
    //             $status_hs = 'Đang xử lý';
    //             break;
    //         case 2:
    //             $status_hs = 'Xử lý xong, chờ nhận hồ sơ';
    //             break;
    //         case 4:
    //             $status_hs = 'Hoàn thành';
    //             break;
    //     };

    //     $details = [
    //         'fullname' => $latest_hs->usersubmit[0]->name,
    //         'name' => $latest_hs->thutuc[0]->tt_name,
    //         'update' => $latest_hs->updated_at->format('m-d-Y'),
    //         'status' => $status_hs,
    //         'code' => $latest_hs->nhs_code,
    //         'user_require' => $latest_hs->nhs_note,
    //     ];
        
    //     $userEmail = $latest_hs->usersubmit[0]->email;
    //     Mail::to($userEmail)->send(new myMail($details));

    //     return redirect()->back()->with('success', 'Đã gửi mail thông báo đến công dân');
    // }
}
