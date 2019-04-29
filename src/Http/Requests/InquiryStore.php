<?php

namespace Neher\Inquiry\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InquiryStore extends FormRequest
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
            'name'=>['required', 'string', 'max:50', 'min:3'],
            'email'=>['required', 'email', 'max:191', 'unique:inquiries'],
            'mobile'=>['required', 'string', 'max:14', 'min:11'],
            'body'=>['required', 'string', 'min:3']
        ];
    }
}
