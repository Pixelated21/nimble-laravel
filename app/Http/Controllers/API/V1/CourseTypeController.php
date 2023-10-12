<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\CourseTypeRequest;
use App\Http\Resources\API\V1\CourseTypeResource;
use App\Models\CourseType;
use Illuminate\Http\Request;

class CourseTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CourseTypeRequest $request)
    {
        return CourseTypeResource::collection(CourseType::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CourseTypeRequest $request, CourseType $courseType)
    {
        return new CourseTypeResource($courseType);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CourseTypeRequest $request, CourseType $courseType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseTypeRequest $request, CourseType $courseType)
    {
        $courseType->delete();
    }
}
