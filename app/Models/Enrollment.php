<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    //
    protected $fillable =[
        'enrolled_at',
        'student_id',
        'course_id',
    ];
}
