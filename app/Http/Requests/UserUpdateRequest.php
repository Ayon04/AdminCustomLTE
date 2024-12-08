<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;



class UserUpdateRequest extends FormRequest {
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */

    public function rules(): array
    {
        $id = $this->route('id');

        return [
            'fullname' => 'required|string|min:3|regex:/^[\pL\s]+$/u|max:30',
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($id), // Replace 'user' with your route parameter
            ],
            'mobile' => [
                'required',
                'digits:11',
                'regex:/^01[0-9]{9}$/',
                Rule::unique('users', 'mobile')->ignore($id), // Replace 'user' with your route parameter
            ],
            'password' => 'required|alpha_num|min:4|max:10',
        ];
    }


    public function messages(){
        return [
            'fullname.required'      => 'Name is required',
            'fullname.alpha'         => 'Name must be alphabetic',
            'fullname.max'           => 'Name cannot be more than 30 characters',
            'mobile.required'        => 'Mobile number is required',
            'mobile.digits'          => 'Mobile number must be exactly 11 digits',
            'mobile.regex'           => 'Mobile number must start with 01 and contain exactly 11 digits',
            'mobile.unique'          => 'Mobile number already exists',
            'email.required'         => 'Email is required!',
            'email.email'            => 'Email format is incorrect',
            'email.unique'           => 'Email already exists',
            'password.required'      => 'Password is required!',
            'password.max'           => 'Password cannot be more than 10 characters',
            'password.min'           => 'Password must be at least 4 characters',
            'password.alpha_num'     => 'Password must be a combination of alphabets and numbers',
        ];
    }

    /**
     *  Filters to be applied to the input.
     *
     * @return array
     */
    public function filters()
    {
        return [
            'email' => 'trim|lowercase',
            'name'  => 'trim|capitalize|escape'

        ];
    }


}

