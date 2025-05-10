<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    //

     use HasFactory;

    protected $fillable = [
        'price',
        'payment_status',
        'student_id',
        'course_id',
        'enrollment_id',

    ];


        public function student() {
        return $this->belongsTo(User::class, 'student_id');
    }
    
    public function course() {
        return $this->belongsTo(Course::class);
    }
    
    public function enrollment() {
        return $this->belongsTo(Enrollment::class);
    }
    }



