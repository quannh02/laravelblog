<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TaiXe;
use Input;
use App\MyFunction;
use App\Cars;

class TaiXeController extends Controller
{
   
    public function dstaixe()
    {
        $taixe = TaiXe::select('taixe_id' ,'tentaixe', 'banglaixe', 'ngaysinh','sothich')->get()->toArray();
        foreach($taixe as $key => $value){
            $myfunction = new MyFunction;
            $arrayxe = $myfunction->laixe($value['banglaixe']);
            array_push($taixe[$key], $arrayxe);
            $socho_xe = TaiXe::find($value['taixe_id'])->xe;
            //dd($socho_xe);
            if($socho_xe != null){
                array_push($taixe[$key], $socho_xe->socho_xe);
            }
        }
        //dd($taixe);
        return view('backend.taixe.list', compact('taixe'));
    }

    
    public function themtaixe()
    {
        return view('backend.taixe.add');
    }

    public function postthemtaixe()
    {
        $taixe = new TaiXe;
        $taixe->tentaixe = Input::get('tentaixe');
        $taixe->ngaysinh = Input::get('ngaysinh');
        $taixe->banglaixe = Input::get('banglaixe');
        $taixe->sothich = Input::get('sothich');
        $taixe->save();
        return redirect()->route('dstaixe');

    }

   
    public function suataixe($id)
    {
        $tai = TaiXe::where('taixe_id', $id)->get()->first();
        return view('backend.taixe.edit', compact('tai'));
    }

    
    public function postTaixe($id)
    {
        $taixe = TaiXe::findOrFail($id);
        $taixe->tentaixe = Input::get('tentaixe');
        $taixe->ngaysinh = Input::get('ngaysinh');
        $taixe->banglaixe = Input::get('banglaixe');
        $taixe->sothich = Input::get('sothich');
        $taixe->save();
        return redirect()->route('dstaixe')->with('messages', 'Đã sửa thành công');
    }

    
    
    public function xoataixe($id)
    {
        $tai = TaiXe::findOrFail($id);
        $tai->delete();
        return redirect()->route('dstaixe');
    }
}
