<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MonthiModel;
use App\Models\User;
use App\Models\ListExamUserModel;
use Illuminate\Support\Facades\Mail;
use App\Mail\myMail;
use Illuminate\Support\Facades\Auth;

class myClientController extends Controller
{

    public function DetailExamUser($id) {
        $currentID = Auth::id();

        $modelNhs = new ListExamUserModel;
        // Tam thoi
        $modelNhs->addData($currentID, $id);
   

        $data = ListExamUserModel::with('userlist','subjectlist')->where('user_id',$currentID)->orderByDesc('updated_at')->first();
        return view('client.ghidanh',['data' => $data]);
    }
    public function SubmitDetailExamUser($id) {

        $currentID = Auth::id();

        // Send email tự động

        $latest_hs = ListExamUserModel::with('userlist','subjectlist')->where('id',$id)->first();
    

        $details = [
            'fullname' => $latest_hs->userlist[0]->firstname." ".$latest_hs->userlist[0]->lastname,
            'idcard' => $latest_hs->userlist[0]->idcard,
            'subjectname' => $latest_hs->subjectlist[0]->name,
            'subjecttime' => $latest_hs->subjectlist[0]->time_exam,
            'location' => $latest_hs->subjectlist[0]->location,
            'userregister' => $latest_hs->updated_at->format('m-d-Y'),
            'code' => $latest_hs->code,
        
        ];
        
        $userEmail = $latest_hs->userlist[0]->email;
        // dd($details); DA XONG
        // Mail::to($userEmail)->send(new myMail($details));

        return back()->with('success','Đăng ký thành công! Vui lòng chuyển sang bước tiếp theo');
    }
    


    public function submitCode() {

        $nhs = ListExamUserModel::with('userlist','subjectlist')->where('code',request()->code)->first();
        // return response()->json(['data' =>$nhs], 201);

        if ($nhs) 
        {
            $data = $nhs->userlist[0]->firstname.' '. $nhs->userlist[0]->lastname;
            $nhs->update(['status' => 1]);
            $msg = '<div style="color: #106a06;FONT-WEIGHT: 700;text-transform: uppercase;line-height: 1.5;"> Hợp lệ <br> Xin chào ' . $data .'</div>';
            
        } else {
            $msg = '<div style="color: #f90000;FONT-WEIGHT: 700;text-transform: uppercase;line-height: 1.5;"> Không lệ <br> Mã số không tồn tại';
        }

        return response()->json(['data' =>$msg], 201);
    }
}





