<?php

namespace App\Http\Requests\Admin\Homework;

use Illuminate\Foundation\Http\FormRequest;

class HomeworkUpdateRequest extends FormRequest
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
            // 'id' => 'exists:homework,id',
            'name' => 'required|string',
            'homework_max' => 'required',
            'homework_min' => 'required',
            'level_id' => 'exists:levels,id',
            'group_id' => 'exists:groups,id',
            'deadline' => 'required|date'
        ];
    }
}
