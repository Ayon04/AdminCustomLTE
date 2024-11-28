<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
// use App\Services\Models\UserService;
// use App\Services\Models\UserService;

class UserStoreRequest extends FormRequest {

    
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array {
        return [
            'fullname'     => 'required | string  | min:3   |regex:/^[\pL\s]+$/u  | max: 30 ',
            'email'         => 'required | email   ' ,
            'mobile'        => 'required | regex:/(01)[0-9]{9}/ ',
            'password'      => 'required|confirmed | alpha_num | min:4 | max:10 ',
            'password_confirmation' => 'required'
        ];
        
    }

  
        public function messages(){
        return [
            
            'fullname.required'      =>'Name is Required',
            'fullname.alpha'         =>'Name must be alphabetic',
            'fullname.max'           =>'Name can not be more then 30 charecters',
           'mobile.required'         =>'mobile number is required',
            'mobile.digits'          =>'mobile no must be 11 digits',
            'mobile.regex'           =>'mobile no must start with 01',
            'mobile.numeric'         =>'mobile no must be numeric',
            'mobile.length'          =>'mobile no must be 11 digits',
            'email.required'         => 'Email is required!',
            'email.email'            => 'Email is not correct format',
            'password.required'      => 'Password is required!',
            'password.max'           =>'password can not be more than 10 charecters',
            'password.min'           =>'password must be atleast 4 charecters', 
            'password.alpha_num'     =>'password must be combination of alphabets and numbers',
            'password_confirmation.required'=>'Retype is Required'  
            
                                                    
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




