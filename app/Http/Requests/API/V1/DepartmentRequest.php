<?php

namespace App\Http\Requests\API\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DepartmentRequest extends FormRequest
{
    const PREFIX = 'departments.';
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
                'department_name' => ['bail', 'required', 'string', 'max:150', Rule::unique('departments', 'department_name')],
            ];
        }
        if ($currentRouteName === self::ROUTE['update']) {
            return [
                'department_name' => ['bail', 'required', 'string', 'max:150', Rule::unique('departments', 'department_name')->ignore(($this->department))],
            ];
        }

        return [];
    }
}
