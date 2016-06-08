<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DatXeRequest extends Request
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
            'tendaydu'  => 'required',
            'gioitinh'  => 'required',
            'sodienthoai'   => 'required',
            'diachi'    => 'required',
            'diemdon'   => 'required',
            'diemden'   => 'required',
            'ngaydi'   => 'required',
            'ngayve'   => 'required',
        ];
    }

    public function messages(){
        return [
            'tendaydu.required' => 'Vui lòng nhập tên.',
            'email.required' => 'Vui lòng nhập email.',
            'sodienthoai.required'=> 'Vui lòng nhập số điện thoại',
            'diachi.required' => 'Vui lòng nhập địa chỉ',
            'diemdon.required' => 'Vui lòng nhập điểm đón',
            'diemden.required' => 'Vui lòng nhập điểm đến',
            'ngaydi.required' => 'Vui lòng nhập ngày đi',
            'ngayve.required' => 'Vui lòng nhập ngày về'
        ];
    }
}
