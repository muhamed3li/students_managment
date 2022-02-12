<?php

namespace App\Http\Requests\Admin\HomeworkSolution;

use Illuminate\Foundation\Http\FormRequest;

class HomeworkSolutionDeleteRequest extends FormRequest
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
            'id' => 'required|exists:homework_solutions,id',
        ];
    }
}
