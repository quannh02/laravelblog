<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\TinTuc;
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
        $tintuc->tieude = $tieude = Input::get('tieude');
        $tintuc->noidung =$noidung = Input::get('noidung');
        $tintuc->save();
        return redirect()->route('themtintuc')->with(['flash_level'=> 'success', 'flash_message' => 'Đã thêm dữ liệu thành công']);

    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
