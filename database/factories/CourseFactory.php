<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\CourseType;
use App\Models\Department;
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
        return [
            'course_name' => $this->faker->words(3, true), // Generate a random course name.
            'course_code' => $this->faker->unique()->regexify('[A-Z]{6}\d{3}'), // Generate a random course code (e.g., ABCD123).
            'qualification' => $this->faker->sentence,
            'course_type_id' => CourseType::all()->random()->id,
            'department_id' => Department::all()->random()->id,
        ];
    }
}
