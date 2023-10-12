<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\AssignmentRequest;
use App\Http\Resources\API\V1\AssignmentResource;
use App\Models\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AssignmentRequest $request)
    {
        return AssignmentResource::collection(Assignment::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AssignmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AssignmentRequest $request, Assignment $assignment)
    {
        return new AssignmentResource($assignment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AssignmentRequest $request, Assignment $assignment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AssignmentRequest $request, Assignment $assignment)
    {
        return $assignment->delete();
    }
}
