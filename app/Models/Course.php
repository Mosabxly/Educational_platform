<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    //
    use HasFactory;

    protected $fillable=[
        'title',
        'description',
        'level',
        'start_at',
        'end_at',
        'category_id',
        'instructor_id',
    ];


    
    public function instructor() {
        return $this->belongsTo(User::class, 'instructor_id');
    }
    
    public function category() {
        return $this->belongsTo(Category::class);
    }
    
    public function enrollments() {
        return $this->hasMany(Enrollment::class);
    }
    
    public function lessons() {
        return $this->hasMany(Lesson::class);
    }
    
    public function reviews() {
        return $this->hasMany(Review::class);
    }
    
    public function quizzes() {
        return $this->hasMany(Quizz::class);
    }
    
    public function certificates() {
        return $this->hasMany(Certificate::class);
    }
    
    public function payments() {
        return $this->hasMany(Payment::class);
    }

}
