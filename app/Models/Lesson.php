<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Lesson extends Model
{
    //

    use HasApiTokens  ,   HasFactory;

    protected $fillable = [
         'content',
        'order',
        'course_id',
    ];

     public function course() {
        return $this->belongsTo(Course::class);
    }
}
