<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthiModel extends Model
{
    use HasFactory;

    protected $table = 'subjects';
    protected $guarded = [];

    public function thisinh()
    {
        return $this->belongsToMany(User::class, 'list_exam', 'subject_id', 'user_id');
    }

    // public function linhvuc()
    // {
    //     return $this->hasMany(LinhvucModel::class,'donvi_id','id');
    // }

    // public function linhvucthutuc()
    // {
    //     return $this->hasManyThrough(
    //         ThutucModel::class, 
    //         LinhvucModel::class,
    //         'donvi_id',
    //         'linhvuc_id',
    //         'id',
    //         'id'
    //     );
    // }
}
