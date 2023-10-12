<?php

namespace App\Http\Resources\API\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DepartmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'department_name' => $this->department_name,
            'department_code' => $this->department_code,
            'courses' => CourseResource::collection($this->whenLoaded('courses')),
            'created_at' => $this->created_at?->format('Y-m-d'),
            'updated_at' => $this->updated_at?->format('Y-m-d'),
            'deleted_at' => $this->deleted_at?->format('Y-m-d'),
        ];
    }
}
