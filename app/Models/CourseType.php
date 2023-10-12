<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseType extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'course_type_name',
        'course_type_code'
    ];

    public function getRouteKeyName()
    {
        return 'course_type_code';
    }

    public function courses()
    {
        return $this->hasMany(Course::class, 'id', 'id');
    }
}
