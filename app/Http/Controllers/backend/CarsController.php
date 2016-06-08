<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cars;
use DB;
use App\Http\Requests\ThemXeRequest;
use App\Http\Requests\EditXeRequest;
use App\MyFunction;
use Carbon\Carbon;
use App\TaiXe;
use App\Vote;
use App\Brand;

class CarsController extends Controller
{
    
    public function getAllCars(){
        $now = Carbon::now();
        $unixtimenow = strtotime($now);
        //dd($unixtimenow); die();
        $allCars = Cars::paginate(5);
        //dd($allCars);
        $carChamdangkiem = array();
        $allCarsnotpaginate = Cars::all();
        foreach($allCarsnotpaginate as $car){
            $unixNgayPhaiDangKiem = strtotime($car->ngaydangkiem) + (182*60*60*24);
            $soNgayConLaiDeDangKiem = floor(($unixNgayPhaiDangKiem - $unixtimenow )/(60*60*24));
            //echo $soNgayConLaiDeDangKiem . ' ';
            if($soNgayConLaiDeDangKiem < 10){
                array_push($carChamdangkiem, array(
                    'xe_id' => $car->xe_id,
                    'ngayconlai' => $soNgayConLaiDeDangKiem
                    ));
            }
        }

        //dd($allCars);
        //dd($carChamdangkiem); die();
        return view('backend.cars.danhsachxe', compact('allCars', 'carChamdangkiem'));
    }
   
    public function create()
    {
        $taixedaxepxe = Cars::select('tai_xe_id')->get();
        //dd($taixedaxepxe);
        foreach($taixedaxepxe as $key => $taixe){
            if($taixe->tai_xe_id != null){
                $taixearray[$key] =  $taixe->tai_xe_id;
            }
        }
        //dd($taixearray);

        $brands = Brand::all();
        $taixe = TaiXe::whereNotIN('taixe_id', $taixearray)->get();
        //dd($taixe);
        return view('backend.cars.add', compact('taixe', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ThemXeRequest $request)
    {
        $car = new Cars;
        $car->hang_id      = $request->hang_name;
        $car->ten_xe       = $request->ten_xe;
        $car->giamuaxe     = $request->giamuaxe;
        $car->sodangky_xe  = $request->sodangky_xe;
        $car->color        = $request->color;
        $car->socho_xe     = $request->socho_xe;
        $car->tai_xe_id     = $request->tai_xe_id;
        $file = $request->file('url_hinhxe');
        $destinationPath = base_path(). "/public/user/images/";

        $function = new MyFunction;
        $url_hinhxe = $function->stripUnicode(basename($file->getClientOriginalName()));
        
        //dd($car->ngaysanxuat); die();
        $car->url_hinhxe = $url_hinhxe;
       
        $fileName = $destinationPath . $url_hinhxe;
        //dd($file); die();
        if ($request->hasFile('url_hinhxe')) {
            if ($file->isValid()) {
                $file->move($destinationPath, $fileName);
            }   
        }
        $car->ngaysanxuat = $function->changedatetimeformat($request->ngaysanxuat);
        $car->ngaydangkiem = $function->changedatetimeformat($request->ngaydangkiem);
        $car->save();

        $order = new Vote([
            'sovotes' => 0,
            'tongdiem' => 0
            ]);
        $car->vote()->save($order);
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
        
        $brands = Brand::all();

        $taixedaxepxe = Cars::select('tai_xe_id')->get();
        foreach($taixedaxepxe as $key => $taixe){
            if($taixe->tai_xe_id != null){
                $taixearray[$key] =  $taixe->tai_xe_id;
            }
        }
        $taixehientai = TaiXe::where('taixe_id', $data->tai_xe_id)->get()->first();
        //dd($taixearray);                
        $taixe = TaiXe::whereNotIN('taixe_id', $taixearray)->get();
        //dd($taixe);
        return view('backend.cars.suaxe', compact('data', 'taixehientai', 'taixe', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditXeRequest $request, $xe_id)
    {
        $car = Cars::findOrFail($xe_id);
        //$cars->xe_id = $id;
        $car->hang_id      = $request->hang_name;
        $car->ten_xe       = $request->ten_xe;
        $car->giamuaxe     = $request->giamuaxe;
        $car->sodangky_xe  = $request->sodangky_xe;
        $car->color        = $request->color;
        $car->socho_xe     = $request->socho_xe;
        $car->tai_xe_id     = $request->taixe_xe;
        $function = new MyFunction;
        
        if($request->hasFile('url_hinhxe')) {
            $file = $request->file('url_hinhxe');
            $destinationPath = base_path(). "/public/user/images/";
            $url_hinhxe = $function->stripUnicode(basename($file->getClientOriginalName()));
           
            $car->url_hinhxe = $url_hinhxe;
            $fileName = $destinationPath . $url_hinhxe;
            //dd($file); die();
                if ($file->isValid()) {
                    $file->move($destinationPath, $fileName);
                }   
            }
        if($request->ngaydangkiem != null){
        $car->ngaydangkiem = $function->changedatetimeformat($request->ngaydangkiem);
        //dd($cars->ngaydangkiem); 
        }   
        if($request->ngaysanxuat != null){
            $car->ngaysanxuat  = $function->changedatetimeformat($request->ngaysanxuat);
        }
        $car->gianoithanh = $request->gianoithanh;
        $car->giaduongdai = $request->giaduongdai;
        $car->giasanbay = $request->giasanbay;
        $car->giathuethang = $request->giathuethang;
        $car->giangoaigio = $request->giangoaigio;
        $car->save();
        return redirect('danhsachxe')->with('flash_message', 'Xe '.$xe_id.' đã được sửa.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $car = Cars::findOrFail($id);
        $car->delete();
        return redirect()->route('danhsachxe');
    }
}
