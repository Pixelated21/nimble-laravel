<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\CourseRequest;
use App\Http\Resources\API\V1\CourseResource;
use App\Models\Course;
use App\Models\CourseType;
use App\Models\Department;
use Illuminate\Support\Str;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CourseRequest $request)
    {
        $course = Course::query()->with('department', 'students')->orderBy('updated_at', 'desc')->get();
        return CourseResource::collection($course);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseRequest $request)
    {
        $course_type = CourseType::query()->where('course_type_code', $request->course_type_code)->first();
        $department = Department::query()->where('department_code', $request->department_code)->first();

        $course = Course::create([
            'course_name' => $request->course_name,
            'course_code' => Str::random(6),
            'qualification' => 'temp',
            'course_type_id' => $course_type->id,
            'department_id' => $department->id,
        ]);

        return new CourseResource($course);
    }

    /**
     * Display the specified resource.
     */
    public function show(CourseRequest $request, Course $course)
    {
        $course->load('department', 'students');
        return new CourseResource($course);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CourseRequest $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseRequest $request, Course $course)
    {
        $course->delete();
    }
}
