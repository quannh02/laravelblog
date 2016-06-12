<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ThemXeRequest extends Request
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
            'hang_name' => 'required',
            'ten_xe'    => 'required',
            'giamuaxe' => 'required',
            'url_hinhxe' => 'required|image',
            'sodangky_xe' => 'required',
            'socho_xe' => 'required|integer|between:1,100',
            'ngaysanxuat' => 'required', 
            'ngaydangkiem' => 'required',
            'color'     => 'required',
        ]; 
    }

    public function messages(){
        return [
            'hang_name.required' => 'Vui lòng nhập hãng xe.',
            'ten_xe.required'            => 'Vui lòng nhập tên xe', 
            'giamuaxe.required' => 'Vui lòng nhập giá mua xe.',
            'socho_xe.required' => 'Vui lòng nhập số chỗ.',
            'url_hinhxe.required' => 'Vui lòng nhập hình',
            'url_hinhxe.image'  => 'Hình phải là định dạng jpeg, png, bmp, gif, or svg',
            'socho_xe.between'  => 'Số chỗ phải nằm trong khoảng 1 đên 100',
            'ngaysanxuat.required' => 'Vui lòng nhập ngày sản xuất',
            'ngaydangkiem.required' => 'Vui lòng nhập ngày đăng kiểm',
            'sodangky_xe.required'  => 'Vui lòng nhập số đăng ký xe',
            'color.required'       => 'Vui lòng nhập màu xe'
        ];
    }
}
