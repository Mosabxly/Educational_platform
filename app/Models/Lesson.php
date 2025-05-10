<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Lesson extends Model
{
    //

    use HasApiTokens;

    protected $fillable = [
         'content',
        'order',
        'course_id',
    ];

     public function course() {
        return $this->belongsTo(Course::class);
    }
}
