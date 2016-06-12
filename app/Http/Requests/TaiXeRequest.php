<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TaiXeRequest extends Request
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
            'tentaixe' => 'required',
            'banglaixe' => 'required',
            'sodienthoai' => 'required|regex:/^0[1-9]{1}[0-9]{8}([0-9]{1})?$/',
            'ngaysinh'  => 'required'
        ]; 
    }

    public function messages(){
        return [
            'tentaixe.required'  => 'Vui lòng nhập tên',
            'banglaixe.required' => 'Vui lòng nhập bằng lái.',
            'sodienthoai.required'  => 'Vui lòng nhập số điện thoại',
            'sodienthoai.regex' => 'Số điện thoại không hợp lệ.',
            'ngaysinh.required' => 'Vui lòng nhập ngày sinh.',
        ];
    }
}
