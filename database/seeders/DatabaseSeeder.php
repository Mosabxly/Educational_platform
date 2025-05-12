<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Certificate;
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Lesson;
use App\Models\Payment;
use App\Models\Quizz;
use App\Models\QuizResult;
use App\Models\Review;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void 
    {
        Category::factory(10)->create();
        User::factory(10)->create();
        Course::factory(10)->create();
        Enrollment::factory(10)->create();
        Lesson::factory(10)->create();
        Review::factory(10)->create();
        Quizz::factory(10)->create();
        QuizResult::factory(10)->create();
        Certificate::factory(10)->create();
        Payment::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
    }
}
