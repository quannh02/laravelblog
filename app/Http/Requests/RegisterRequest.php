<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegisterRequest extends Request
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
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password'
        ]; 
    }

    public function messages(){
        return [
            'name.required'  => 'Vui lòng nhập tên',
            'email.required' => 'Vui lòng nhập email.',
            'email.email'  => 'Vui lòng nhập'
            'password.required' => 'Vui lòng nhập password.',
            'password_confirmation.same' => 'Mật khẩu không khớp nhau.',
            'password_confirmation.required' => 'Vui lòng nhập lại mật khẩu'
        ];
    }
}
