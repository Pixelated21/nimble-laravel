<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\StudentRequest;
use App\Http\Resources\API\V1\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(StudentRequest $request)
    {
        return StudentResource::collection(Student::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(StudentRequest $request, Student $student)
    {
        return new StudentResource($student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentRequest $request, Student $student)
    {
        $student->delete();
    }
}
