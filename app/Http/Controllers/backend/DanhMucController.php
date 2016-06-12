<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\HangXeRequest;
use App\Brand;
use Input;
class DanhMucController extends Controller
{
    public function danhmuc(){
        $brands = Brand::all();
        return view('backend.brand.list', compact('brands'));
    }
    public function getthemdanhmuc(){
        return view('backend.brand.them');
    }
    public function postthemdanhmuc(HangXeRequest $request){
        $brand = new Brand;
        $brand->hang_name = $request->hang_name;
        $brand->save();
        return redirect('danhmuc');
    }
    public function getsuadanhmuc($id){
        $brand = Brand::findOrFail($id);
        return view('backend.brand.sua', compact('brand'));
    }
    public function postsuadanhmuc($id, HangXeRequest $request){
        $brand = Brand::findOrFail($id);
        $brand->hang_name = $request->hang_name;
        $brand->save();
        return redirect('danhmuc');
    }
    public function xoadanhmuc($id){
        $brand = Brand::findOrFail($id);
        $brand->delete();
        return redirect('danhmuc');
    }
}
