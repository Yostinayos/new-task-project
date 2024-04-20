<?php

namespace App\Http\Requests\Task;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'sometimes|string',
            'description'=>'sometimes|string',
         
            'project_id'=>'sometimes|exists:projects,id',
            'starting_date'=>'sometimes|date',
            'ending_date'=>'sometimes|date',
            'category_id'=>'sometimes|exists:categories,id'
        ];
    }
}
