<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'assignment_name',
        'assignment_code',
        'assignment_description',
        'assignment_due_date',
        'max_points',
        'course_id',
        'activity_type_id',
    ];
}
