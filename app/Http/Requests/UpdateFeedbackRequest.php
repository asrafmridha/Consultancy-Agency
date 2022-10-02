<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFeedbackRequest extends FormRequest
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

                'image'             =>'image',
                'short_description' =>'required|max:250',
                'client_name'       =>'required|max:15',
                'designation'       =>'required|max:15', 
                'star'              =>'required'
    
            ];  
    }

    public function messages()
    {
        return [
            'image.required' => 'image is required!',
            'short_description.required' => 'Short Description field is required!',
            'client_name.required' => 'Client Name is required!',
            'designation.required' =>  'Designation is required', 
            'star.required'        => 'Star is required' ,    
        ];
    }
}
