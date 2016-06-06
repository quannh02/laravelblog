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
use App\TaiXe;
use App\Vote;

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

        $taixe = TaiXe::whereNotIN('taixe_id', $taixearray)->get();
        //dd($taixe);
        return view('backend.cars.add', compact('taixe'));
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
        $cars->tai_xe_id     = $request->tai_xe_id;
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

        $order = new Vote([
            'sovotes' => 0,
            'tongdiem' => 0
            ]);
        $cars->vote()->save($order);
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
        return view('backend.cars.suaxe', compact('data', 'taixehientai', 'taixe'));
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
        $cars->tai_xe_id     = $request->taixe_xe;
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
        return redirect('danhsachxe');
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
