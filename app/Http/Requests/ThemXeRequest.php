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
            'hang_xe' => 'required',
            'giamuaxe' => 'required',
            'url_hinhxe' => 'image',
            'sodangky_xe' => 'required',
            'socho_xe' => 'required',
            'ngaysanxuat' => 'required'
        ]; 
    }

    public function messages(){
        return [
            'hang_xe.required' => 'Vui lòng nhập hãng xe.',
            'giamuaxe.required' => 'Vui lòng nhập giá mua xe.'
        ];
    }
}
