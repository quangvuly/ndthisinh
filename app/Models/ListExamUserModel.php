<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MonthiModel;

use DateTime;

class ListExamUserModel extends Model
{
    use HasFactory;

    protected $table = 'list_exam';
    protected $guarded = [];

    // public function thisinh()
    // {
    //     return $this->belongsToMany(User::class, 'list_exam', 'subject_id', 'user_id');
    // }

    public function userlist()
    {
        return $this->hasMany(User::class,'id','user_id');
    }

    public function subjectlist()
    {
        return $this->hasMany(MonthiModel::class,'id','subject_id');
    }

    public function addData($user_id, $subject_id) {
        $characters = '123456789';
        $length = strlen($characters);
        $randomString = '';
        for ($i = 1; $i < 9; $i++) {
            $randomString .= $characters[rand(0, $length - 1)];
        }

        $ngaythi = MonthiModel::where('id',$subject_id)->get();
        $nophsAdd = new ListExamUserModel;
        $nophsAdd->user_id = $user_id;
        $nophsAdd->subject_id = $subject_id;
        $nophsAdd->status = 0;
        $nophsAdd->code = $randomString;
        $nophsAdd->examdate = $ngaythi->time_exam;
        $nophsAdd->created_at = new DateTime();
        // $nophsAdd->updated_at = new DateTime();
        $result = $nophsAdd->save();
    }
}
