<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cars;
use DB;
use App\Http\Requests\ThemXeRequest;
use App\MyFunction;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllCars(){
        $allCars = DB::table('tbl_xe')->select('xe_id','hang_xe', 'sodangky_xe')->orderBy('xe_id', 'asc')->paginate(5);
        return view('backend.cars.danhsachxe', compact('allCars'));
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
        return view('backend.cars.themxe');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ThemXeRequest $request)
    {
        $cars = new Cars;
        $cars->hang_xe      = $request->hang_xe;
        $cars->giamuaxe     = $request->giamuaxe;
        $cars->sodangky_xe  = $request->sodangky_xe;
        $cars->color        = $request->color;
        $cars->socho_xe     = $request->socho_xe;
        $cars->taixe_xe     = $request->taixe_xe;
        $file = $request->file('url_hinhxe');
        $destinationPath = base_path(). "/public/uploads/";

        $function = new MyFunction;
        $url_hinhxe = $function->stripUnicode(basename($file->getClientOriginalName()));
        $cars->ngaysanxuat  = $function->changeDatePicker($request->ngaysanxuat, '00', '00');
        $cars->url_hinhxe = $url_hinhxe;
        $fileName = $destinationPath . $url_hinhxe;
        //dd($file); die();
        if ($request->hasFile('url_hinhxe')) {
            if ($file->isValid()) {
                $file->move($destinationPath, $fileName);
            }   
        }
        $cars->save();
        return redirect()->route('themxe')->with(['flash_level'=> 'success', 'flash_message' => 'Đã thêm dữ liệu thành công']);
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
