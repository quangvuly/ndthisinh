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

   
}
