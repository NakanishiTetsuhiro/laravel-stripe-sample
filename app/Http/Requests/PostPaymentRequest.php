<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostPaymentRequest extends FormRequest
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
     * バリデーションルール
     *
     * @return array
     */
    public function rules()
    {
        return [
            'stripeToken' => 'required|string|min:10|max:40',
        ];
    }
}
