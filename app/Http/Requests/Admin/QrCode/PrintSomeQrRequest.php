<?php

namespace App\Http\Requests\Admin\QrCode;

use Illuminate\Foundation\Http\FormRequest;

class PrintSomeQrRequest extends FormRequest
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
            'number' => 'required|numeric',
            'link' => 'required',
            'label' => 'nullable',
            'level_id' => 'exists:levels,id'
        ];
    }
}
