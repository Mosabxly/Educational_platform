<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Enrollment extends Model
{
    //
        use HasFactory;

    protected $fillable =[
        'enrolled_at',
        'student_id',
        'course_id',
    ];
}
