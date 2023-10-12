<?php

namespace App\Http\Requests\API\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CourseRequest extends FormRequest
{
    const PREFIX = 'courses.';
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
                'course_name' => ['bail', 'required', 'string', 'max:150', Rule::unique('courses', 'course_name')],
                'course_type_code' => ['bail', 'required', Rule::exists('course_types', 'course_type_code')],
                'department_code' =>  ['bail', 'required', Rule::exists('departments', 'department_code')],
                'qualification' => ['required', 'string'],
            ];
        }

        if ($currentRouteName === self::ROUTE['update']) {
            return [
                'course_name' => ['bail', 'required', 'string', 'max:150', Rule::unique('courses', 'c_name')->ignore($this->course)],
                'course_type' => ['bail', 'required', 'uuid', Rule::exists('course_types', 'id')],
                'department' =>  ['bail', 'required', 'uuid', Rule::exists('departments', 'id')],
                'qualifications' => ['required', 'string'],
            ];
        }
        return [];
    }
}
