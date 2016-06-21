<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\TinTuc;
use Input;

class TinTucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function themTinTuc(){
        return view('backend.tintuc.them');
    }
    public function getAllTinTuc(){
        $tintuc = TinTuc::all();
        //dd($tintuc[0]->tieude); die();
        return view('backend.tintuc.tintuc', compact('tintuc'));
    }
    public function postTinTuc($id){
        $tintuc = new TinTuc;
        $tacgia = User::findOrFail($id);
        $tintuc->tacgia = $tacgia->tendaydu;
        $tintuc->tieude  = Input::get('tieude');
        $tintuc->noidung = Input::get('noidung');
        $tintuc->save();
        return redirect()->route('themtintuc')->with(['flash_level'=> 'success', 'flash_message' => 'Đã thêm dữ liệu thành công']);

    }
    
    
    public function edit($id)
    {
        $data = TinTuc::where('id', $id)->get()->first();
        //dd($data); die();
        return view('backend.tintuc.edit', compact('data'));
    }

    
    public function update(Request $request, $id)
    {
        $tintuc = TinTuc::findOrFail($id);
        $tintuc->tieude  = Input::get('tieude');
        $tintuc->noidung = Input::get('noidung');
        $tintuc->save();
        return redirect()->route('quanlytintuc');
    }

    
    public function destroy($id)
    {
        $tintuc = TinTuc::findOrFail($id);
        $tintuc->delete();
        return redirect()->route('quanlytintuc');
    }
}
