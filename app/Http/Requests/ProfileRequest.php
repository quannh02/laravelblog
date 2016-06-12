<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProfileRequest extends Request
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
            'txtSoDienThoai' => 'required|regex:/^0[1-9]{1}[0-9]{8}([0-9]{1})?$/'
        ];
    }
    public function messages()
    {
        return [
            'txtSoDienThoai.required' => 'Bạn vui lòng nhập số điện thoại',
            'txtSoDienThoai.regex'    => 'Số điện thoại không hợp lệ.'
        ];
    }
}
