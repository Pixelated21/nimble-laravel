<?php

namespace App\Http\Resources\API\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'course_name' => $this->course_name,
            'course_code' => $this->course_code,
            'qualification' => $this->qualification,
            'department' => new DepartmentResource($this->whenLoaded('department')),
            // 'course_type' => new CourseTypeResource($this->whenLoaded('course_type')),
            'students' => StudentResource::collection($this->whenLoaded('students')),
            'created_at' => $this->created_at?->format('Y-m-d'),
            'updated_at' => $this->updated_at?->format('Y-m-d'),
            'deleted_at' => $this->deleted_at?->format('Y-m-d'),
        ];
    }
}
