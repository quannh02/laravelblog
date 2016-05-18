<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cars;
use DB;
use App\Http\Requests\ThemXeRequest;
use App\MyFunction;
use Carbon\Carbon;
use App\Brand;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllCars(){
        $now = Carbon::now();
        $unixtimenow = strtotime($now);



        $allCars = DB::table('tbl_xe')->select('xe_id','hang_xe', 'sodangky_xe', 'url_hinhxe', 'ten_xe', 'color', 'ngaysanxuat','taixe_xe','ngaydangkiem', 'socho_xe')->orderBy('xe_id', 'asc')->paginate(5);
        $carChamdangkiem = array();
        $i = 0;
        foreach($allCars as $car){
            $unixNgayPhaiDangKiem = strtotime($car->ngaydangkiem) + (182*60*60*24);
            $soNgayConLaiDeDangKiem = floor(abs($unixtimenow - $unixNgayPhaiDangKiem)/(60*60*24));
            if($soNgayConLaiDeDangKiem < 10){
                $carChamdangkiem[$i] = array(
                    'xe_id' => $car->xe_id,
                    'ngayconlai' => $soNgayConLaiDeDangKiem
                    );
            }
        }
        //dd($carChamdangkiem); die();
        return view('backend.cars.danhsachxe', compact('allCars', 'carChamdangkiem'));
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
        $cars->ten_xe       = $request->ten_xe;
        $cars->giamuaxe     = $request->giamuaxe;
        $cars->sodangky_xe  = $request->sodangky_xe;
        $cars->color        = $request->color;
        $cars->socho_xe     = $request->socho_xe;
        $cars->taixe_xe     = $request->taixe_xe;
        $file = $request->file('url_hinhxe');
        $destinationPath = base_path(). "/public/user/images/";

        $function = new MyFunction;
        $url_hinhxe = $function->stripUnicode(basename($file->getClientOriginalName()));
        $ngaysanxuat = date('Y:m:d', strtotime($request->ngaysanxuat));
        $cars->ngaysanxuat  = '' . $ngaysanxuat . ' 00:00:00';
        $cars->url_hinhxe = $url_hinhxe;
        $ngaydangkiem = date('Y:m:d', strtotime($request->ngaydangkiem));
        $cars->ngaydangkiem = '' . $ngaydangkiem . ' 00:00:00';
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
    public function edit($xe_id)
    {

        $data = Cars::where('xe_id', $xe_id)->get()->first();
        $brand = Brand::where('brand_id', $data->hang_xe)->get()->first();
        $brand_not_in = Brand::whereNotIn('brand_id', [$data->hang_xe])->get();
        return view('backend.cars.suaxe', compact('data', 'brand', 'brand_not_in'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ThemXeRequest $request, $xe_id)
    {
        $cars = Cars::findOrFail($xe_id);
        //$cars->xe_id = $id;
        $cars->hang_xe      = $request->hang_xe;
        $cars->ten_xe       = $request->ten_xe;
        $cars->giamuaxe     = $request->giamuaxe;
        $cars->sodangky_xe  = $request->sodangky_xe;
        $cars->color        = $request->color;
        $cars->socho_xe     = $request->socho_xe;
        $cars->taixe_xe     = $request->taixe_xe;
        $ngaydangkiem = date('Y:m:d', strtotime($request->ngaydangkiem));
        $cars->ngaydangkiem  = '' . $ngaydangkiem . ' 00:00:00';
        $ngaysanxuat = date('Y:m:d', strtotime($request->ngaysanxuat));
        $cars->ngaysanxuat  = '' . $ngaysanxuat . ' 00:00:00';
        if($request->hasFile('url_hinhxe')) {
            $file = $request->file('url_hinhxe');
            $destinationPath = base_path(). "/public/user/images/";

            $function = new MyFunction;
            $url_hinhxe = $function->stripUnicode(basename($file->getClientOriginalName()));
           
            $cars->url_hinhxe = $url_hinhxe;
            $fileName = $destinationPath . $url_hinhxe;
            //dd($file); die();
                if ($file->isValid()) {
                    $file->move($destinationPath, $fileName);
                }   
            }

        $cars->save();
        return redirect()->route('danhsachxe');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Cars::findOrFail($id);
        $user->delete();
        return redirect()->route('danhsachxe');
    }
}
