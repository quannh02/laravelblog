<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditXeRequest extends Request
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
            'giamuaxe' => 'required',
            'url_hinhxe' => 'image',
            'sodangky_xe' => 'required',
            'socho_xe' => 'required',
        ]; 
    }

    public function messages(){
        return [
            'hang_name.required' => 'Vui lòng nhập hãng xe.',
            'giamuaxe.required' => 'Vui lòng nhập giá mua xe.',
            'url_hinhxe.image' => 'Hình ảnh không đúng định dạng jpg, png'
        ];
    }
}
