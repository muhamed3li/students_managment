<?php

namespace App\Http\Requests\Admin\Payment;

use Illuminate\Foundation\Http\FormRequest;

class PaymentStoreRequest extends FormRequest
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
            'month_id' => 'required|exists:months,id',
            'month_paid' => 'required|numeric',
            'malazem_paid' => 'nullable|numeric',
            'discount' => 'nullable|numeric',
            'student_id' => 'required|int|exists:students,id',
        ];
    }
}
