<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogPost extends FormRequest
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

                         'email'=>'bail|email|confirmed',
                           // 'content'=>'required',
                           // 'check'=>'required',
                           // 'photo'=>'required',
                           'tos'=>'accepted',
                           'start_date'=>'required|date',
                           'end_date'=>'required|date|after_or_equal:start_date',
            
        ];
    }

     public function messages()
    {
        return [
              'title.required'=>'Name does not exists',

        ];
    }


  public function attributes()
    {
        return [

        'title'=>'name',
        'start_date'=>'Start Date',
        'end_date'=>'End Date',
        ];
    }
}
