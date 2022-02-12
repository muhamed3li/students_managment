<?php

namespace App\Http\Requests\Admin\HomeworkSolution;

use Illuminate\Foundation\Http\FormRequest;

class HomeworkSolutionUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'degree' => 'nullable|numeric',
            'solved_at' => 'required|date'
        ];
    }
}
