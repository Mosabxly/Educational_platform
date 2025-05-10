<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quizz extends Model
{
    //


     use HasFactory;

    protected $fillable = [
        'title',
        'course_id',
    ];

    public function course() {
        return $this->belongsTo(Course::class);
    }
    
    public function results() {
        return $this->hasMany(QuizResult::class);
    }
}
