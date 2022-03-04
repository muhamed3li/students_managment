<?php

namespace App\Http\Requests\Admin\Student;

use Illuminate\Foundation\Http\FormRequest;

class StudentStoreRequest extends FormRequest
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
            'gender' => 'boolean',
            'address' => 'nullable|string',
            'home_phone' => 'nullable|string',
            'phone' => 'nullable|string',
            'father_phone' => 'nullable|string',
            'school' => 'nullable|string',
            'status' => 'required|in:reserve,in,out,fired',
            'reserve_paid' => 'nullable|numeric',
            'level_id' => 'nullable|int|exists:levels,id',
            'group_id' => 'nullable|int|exists:groups,id',
        ];
    }
}
