<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_name' => $this->faker->name(),
            'student_email' => $this->faker->unique()->safeEmail(),
            'student_id_number' => $this->faker->unique()->regexify('[A-Z]{6}\d{3}'),
            'student_password' => Hash::make($this->faker->password()),
            'student_phone' => $this->faker->phoneNumber(),
            'student_address' => $this->faker->address(),
            'status' => $this->faker->boolean(60),
            'student_image' => $this->faker->imageUrl(640, 480, 'people', true),
            'course_id' => Course::all()->random()->id,
        ];
    }
}
