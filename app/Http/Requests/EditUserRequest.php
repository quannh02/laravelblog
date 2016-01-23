<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditUserRequest extends Request
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
            'txtUser' => 'required',
            'txtPass' => 'required',
            'txtRePass' => 'required|same:txtPass'
        ];
    }
    public function messages(){
        return [
            'txtUser.required' => 'Vui lòng nhập tên.',
            'txtPass.required' => 'Vui lòng nhập password.',
            'txtEmail.required'=> 'Vui lòng nhập email',
            'txtRePass.same' => 'Password chưa trùng nhau'
        ];
    }
}
