<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TaiXe;
use Input;

class TaiXeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dstaixe()
    {
        $taixe = TaiXe::select('taixe_id' ,'tentaixe', 'banglaixe', 'ngaysinh','sothich')->paginate(5);
        return view('backend.taixe.list', compact('taixe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function themtaixe()
    {
        return view('backend.taixe.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function suataixe($id)
    {
        $tai = TaiXe::where('taixe_id', $id)->get()->first();
        return view('backend.taixe.edit', compact('tai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function xoataixe($id)
    {
        $tai = TaiXe::findOrFail($id);
        $tai->delete();
        return redirect()->route('dstaixe');
    }
}
