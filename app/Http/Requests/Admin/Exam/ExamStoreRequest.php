<?php

namespace App\Http\Requests\Admin\Exam;

use Illuminate\Foundation\Http\FormRequest;

class ExamStoreRequest extends FormRequest
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
            'name' => 'required|string',
            'level_id' => 'required|int|exists:levels,id',
            'group_id' => 'required|int|exists:groups,id',
            'exam_date' => 'required|date',
            'exam_max' => 'required|numeric',
            'exam_min' => 'required|numeric',
        ];
    }
}
