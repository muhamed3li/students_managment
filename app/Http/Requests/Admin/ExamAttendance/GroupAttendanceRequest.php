<?php

namespace App\Http\Requests\Admin\ExamAttendance;

use Illuminate\Foundation\Http\FormRequest;

class GroupAttendanceRequest extends FormRequest
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
            'group_id' => 'required|integer|exists:groups,id',
            'exam_id' => 'required|integer|exists:exams,id',
        ];
    }
}
