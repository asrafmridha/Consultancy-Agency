<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceUpdateRequest extends FormRequest
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
        

            'years'=>'required',
            'heading'=>'required',
            'heading2'   =>'required',
            'title'=>'required',
            'short_description'=>'required',
            'compelte_project'=>'required',
            'satisfied_project'=>'required',
            'ongoing_project'=>'required',
            'first_image'=>'image',
            'second_image'=>'image',
            'side_image1'=>'image',
            'side_image2'=>'image',
            'side_image3'=>'image',
            'side_image4'=>'image',
            'about_first_image'=>'image',
            'about_second_image'=>'image',
            
        ];
    }

    public function messages()
    {
        return [
            'years.required'     => 'Years is required!',
            'heading.required'   => 'heading is required!',
            'heading2.required'  => 'heading is required!',
            'title.required'     => 'Title field is required!',
            'short_description.required' => 'Short Description is required!',
            'compelte_project.required'  =>'compelte_project is required!',
            'satisfied_project.required' =>'compelte_project is required!',
            'ongoing_project.required'   =>'ongoing_project is required!',
            'first_image.required'       =>'First Image Required',
            'second_image.required'      =>'Second Image Required',
            'side_image1.required'       =>'side_image1 Required',
            'side_image2.required'       =>'Image Required',
            'side_image3.required'       =>'Image Required',
            'side_image4.required'       =>'Image REquired',
            'about_first_image.required' =>'Image Required',
            'about_second_image.required'=>'Image Required', 

        ];
    }
}
