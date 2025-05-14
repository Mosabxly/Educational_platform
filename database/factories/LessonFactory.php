<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Testing\Fakes\Fake;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
           'content' => $this->faker->paragraphs(3, true), // محتوى عشوائي
           'order' => $this->faker->unique()->numberBetween(1, 100),
           'created_at' => now(),
           'updated_at' => now(),
           'course_id' => \App\Models\Course::factory(),
            
            
        ];
    }
}
