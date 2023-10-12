<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (self::DEPARTMENTS as $department) {
            Department::factory()->create([
                'department_name' => $department,
            ]);
        }
    }

    const DEPARTMENTS = [
        'Department of Mathematics',
        'Department of Biology',
        'Department of History',
        'Department of Literature',
        'Department of Computer Science',
        'Department of Art',
        'Department of Music',
        'Department of Physical Education',
        'Department of Foreign Languages',
        'Department of Business Administration',
        'Department of Engineering',
        'Department of Medicine',
        'Department of Law',
        'Department of Social Sciences',
        'Department of Psychology',
        'Department of Education',
        'Department of Environmental Science',
        'Department of Philosophy',
        'Department of Culinary Arts',
        'Department of Architecture',
        'Department of Film and Media Studies',
        'Department of Design',
        'Department of Health and Wellness',
        'Department of Marketing',
        'Department of Economics',
        'Department of Political Science',
        'Department of Sociology',
        'Department of Communication',
        'Department of Theater Arts',
        'Department of Religious Studies',
        'Department of Astronomy',
        'Department of Geography',
        'Department of Anthropology',
        'Department of Sports Management',
        'Department of Hospitality Management',
        'Department of Nursing',
        'Department of Dentistry',
        'Department of Pharmacy',
        'Department of Physics',
        'Department of Chemistry',
        'Department of Biology',
        'Department of Geology',
        'Department of Environmental Studies',
        'Department of Agriculture',
        'Department of Fashion Design',
        'Department of Interior Design',
        'Department of Psychiatry',
        'Department of Counseling',
        'Department of Drama',
        'Department of Dance',
        'Department of Veterinary Medicine',
        'Department of Physical Therapy',
        'Department of Optometry',
        'Department of Public Health',
        'Department of Information Technology',
        'Department of Data Science',
        'Department of Machine Learning',
        'Department of Artificial Intelligence',
        'Department of Cybersecurity',
        'Department of Game Development',
        'Department of Web Development',
        'Department of Mobile App Development',
    ];
}
