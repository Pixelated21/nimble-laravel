<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_name',
        'department_code',
    ];

    public function getRouteKeyName()
    {
        return 'department_code';
    }

    public function courses()
    {
        return $this->hasMany(Course::class, 'department_id', 'id');
    }
}
