<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    ///////////////////////////////////////////////////////////////////
    ///////////////// Relationships ///////////////////////////////////
    ///////////////////////////////////////////////////////////////////

    public function coursesTeach() {
        return $this->hasMany(Course::class, 'instructor_id');
    }
    
    public function enrollments() {
        return $this->hasMany(Enrollment::class, 'student_id');
    }
    
    public function reviews() {
        return $this->hasMany(Review::class, 'student_id');
    }
    
    public function quizResults() {
        return $this->hasMany(QuizResult::class, 'student_id');
    }
    
    public function certificates() {
        return $this->hasMany(Certificate::class, 'student_id');
    }
    
    public function payments() {
        return $this->hasMany(Payment::class, 'student_id');
    }
}
