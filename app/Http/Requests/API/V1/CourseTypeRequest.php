<?php

namespace App\Http\Requests\API\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CourseTypeRequest extends FormRequest
{
    const PREFIX = 'course-types.';
    const ROUTE = [
        'index' => self::PREFIX . 'index', // List
        'show' => self::PREFIX . 'show', // Show
        'store' => self::PREFIX . 'store', // Store
        'destroy' => self::PREFIX . 'destroy', // Destroy
        'edit' => self::PREFIX . 'edit', // Edit
        'update' => self::PREFIX . 'update', // Update
    ];

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // Stores the current request route
        $currentRouteName = $this->route()->getName();

        if ($currentRouteName === self::ROUTE['store']) {
            return [
                'course_type_name' => ['bail', 'required', 'string', 'max:150', Rule::unique('course_types', 'course_type_name')],
            ];
        }

        if ($currentRouteName === self::ROUTE['update']) {
            return [
                'course_type_name' => ['bail', 'required', 'string', 'max:150', Rule::unique('course_types', 'course_type_name')->ignore($this->course_type)],
            ];
        }

        return [];
    }
}
