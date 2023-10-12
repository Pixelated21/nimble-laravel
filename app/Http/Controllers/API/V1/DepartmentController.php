<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\DepartmentRequest;
use App\Http\Resources\API\V1\DepartmentResource;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(DepartmentRequest $request)
    {
        $department = Department::query()->with('courses')->orderBy('updated_at', 'desc')->get();
        return DepartmentResource::collection($department);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DepartmentRequest $request)
    {
        $department = Department::create([
            'department_name' => $request->department_name,
            'department_code' => strtoupper(Str::random(6)),
        ]);
        return new DepartmentResource($department);
    }

    /**
     * Display the specified resource.
     */
    public function show(DepartmentRequest $request, Department $department)
    {
        $department->load('courses');
        return new DepartmentResource($department);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DepartmentRequest $request, Department $department)
    {
        $department->update([
            'department_name' => $request->department_name,
        ]);
        return new DepartmentResource($department);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DepartmentRequest $request, Department $department)
    {
        return $department->delete();
    }
}
