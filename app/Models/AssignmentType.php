<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignmentType extends Model
{
    use HasFactory;

    protected $fillable = [
        'assignment_type_name',
    ];

    public function getRouteKeyName()
    {
        return 'assignment_type_name';
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class, 'id', 'id');
    }
}
