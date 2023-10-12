<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_name',
        'student_email',
        'student_password',
        'student_phone',
        'student_address',
        'status',
        'student_image',
        'course_id',
    ];

    public function getRouteKeyName()
    {
        return 'student_id_number';
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'id', 'id');
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'id', 'id');
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class, 'id', 'id');
    }

    public function scopeUuid($query, $uuid)
    {
        return $query->where('s_id', '=', $uuid);
    }

    public function scopeOrEmail($query, $email)
    {
        return $query->orWhere('email_id', 'like', '%' . $email . '%');
    }

    public function scopeOrMobile($query, $mobile)
    {
        return $query->orWhere('mobile', '=', '%' . $mobile . '%');
    }

    public function scopeApproved($query)
    {
        return $query->where('status', '=', true);
    }
}
