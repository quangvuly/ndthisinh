<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MonthiModel;
use App\Models\User;
use App\Models\ListExamUserModel;
use DateTime;
use File;
// use Illuminate\Support\Facades\Mail;
// use App\Mail\myMail;

 

class myAdminController extends Controller
{
    public function getDashboard() {
        $listMonthi = MonthiModel::get();
        $countMonthi = count($listMonthi);
        $listThisinh = User::get();
        $countThisinh = count($listThisinh);

        return view('admin.dashboard',[
            'monthi' => $listMonthi,
            'tong' =>  $countMonthi,
            'thisinh' => $listThisinh,
            'tongthisinh' => $countThisinh - 1
        ]);
    }

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


    public function updateSchedule() {
        $nhs = ListExamUserModel::with('userlist','subjectlist')->where('status',1)->orderByDesc('updated_at')->get();
        return response()->json(['data' =>$nhs], 201);
    }

    public function getSchedule() {
        return view('admin.schedule');
    }

    
}
