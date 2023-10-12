<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'course_id',
        'attendance_status',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'id');
    }
}
