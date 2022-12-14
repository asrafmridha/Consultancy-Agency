<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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

            'image'=>'required','image',
            'name'=>'required',
            'designation'=>'required',

        ];
    }

    public function messages()
    {
        return [

            'image.required'=>"Image field Requird",
            'name.required'=>"Name field Requird",
            'designation.required'=>"This field Requird",


        ];
    }
}
