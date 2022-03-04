<?php

namespace App\Http\Requests\Admin\Payment;

use Illuminate\Foundation\Http\FormRequest;

class PaymentGroupPayRequest extends FormRequest
{
    protected $redirectRoute = "payment.groupPaymentPage";
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
            'month_id' => 'required|integer|exists:months,id'
        ];
    }
}
