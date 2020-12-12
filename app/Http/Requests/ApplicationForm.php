<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationForm extends FormRequest
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
            'name' => 'required | string',
            'password' => 'required|confirmed|min:6',
            'email' => 'required|email | unique:users,email',
            'phone' => 'required',
            'interested_programme' => 'required',
            'preferred_course' => 'required',
            'study_centre' => 'required',
            'address' => 'required',
            'gender' => 'required',
        ];
    }
        public function messages(){
            return [
                'unique' => 'This email is already register please login <a href="/login">Login</a>'
            ];
    }

}
