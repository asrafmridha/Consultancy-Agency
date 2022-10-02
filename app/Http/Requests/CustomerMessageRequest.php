<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerMessageRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'customer_name' => 'required|max:20',
            'customer_email' => 'required',
            'customer_message'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'customer_name.required' => 'Please enter your name',
            'customer_email.required' => 'Please enter your email id',
            'customer_message' => 'Please Write Your Message',
            
        ];
    }
}
