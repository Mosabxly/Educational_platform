<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         $startDate = $this->faker->dateTimeBetween('+1 days', '+1 month');
        $endDate = (clone $startDate)->modify('+'.rand(7, 30).' days');

        return [
             'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'level' => $this->faker->randomElement(['مبتدئ', 'متوسط', 'متقدم']),
            'start_at' => $startDate,
            'end_at' => $endDate,
            'category_id' => rand(1, 5), // تأكد أن لديك تصنيفات في قاعدة البيانات بهذه المعرفات
            'instructor_id' => rand(1, 5), // تأكد أن لديك مدرسين معرفاتهم موجودة
        ];
    }
}
