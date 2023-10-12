<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'course_name',
        'course_code',
        'qualification',
        'course_type_id',
        'department_id',
    ];

    public function getRouteKeyName(): string
    {
        return 'course_code';
    }

    public function courseType()
    {
        return $this->belongsTo(CourseType::class, 'course_type_id', 'id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }

    public function students()
    {
        return $this->hasMany(Student::class, 'course_id', 'id');
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class, 'id', 'id');
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'id', 'id');
    }
}
