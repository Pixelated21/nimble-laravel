<?php

namespace Database\Seeders;

use App\Models\CourseType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (self::COURSE_TYPES as $courseType) {
            CourseType::factory()->create([
                'course_type_name' => $courseType,
            ]);
        }
    }

    const COURSE_TYPES = [
        'Mathematics',
        'Science',
        'History',
        'Literature',
        'Computer Science',
        'Art',
        'Music',
        'Physical Education',
        'Foreign Language',
        'Business',
        'Engineering',
        'Medicine',
        'Law',
        'Social Sciences',
        'Psychology',
        'Education',
        'Environmental Science',
        'Philosophy',
        'Culinary Arts',
        'Architecture',
        'Film and Media Studies',
        'Design',
        'Health and Wellness',
        'Marketing',
        'Economics',
        'Political Science',
        'Sociology',
        'Communication',
        'Theater',
        'Religious Studies',
        'Astronomy',
        'Geography',
        'Anthropology',
        'Sports Management',
        'Hospitality Management',
        'Nursing',
        'Dentistry',
        'Pharmacy',
        'Physics',
        'Chemistry',
        'Biology',
        'Geology',
        'Environmental Studies',
        'Agriculture',
        'Fashion Design',
        'Interior Design',
        'Psychiatry',
        'Counseling',
        'Drama',
        'Dance',
        'Veterinary Medicine',
        'Physical Therapy',
        'Optometry',
        'Public Health',
        'Information Technology',
        'Data Science',
        'Machine Learning',
        'Artificial Intelligence',
        'Cybersecurity',
        'Game Development',
        'Web Development',
        'Mobile App Development',
    ];
}
