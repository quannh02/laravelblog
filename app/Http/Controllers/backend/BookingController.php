<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use App\MyFunction;
use DB;
use App\DonDat;
use App\DonDatCT;
class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getListCar(){
        return view('backend.booking.booking');
    }
    
    public function postListCar(){
        $datepickerDi = Input::get('datepickerDi');
        // đổi sang dạng YYYY:mm:dd H:i:s
        $hourDi = Input::get('hourDi');
        $minuteDi = Input::get('minuteDi');
        $myFunction = new MyFunction;
        $thoigianDi = $myFunction->changeDatePicker($datepickerDi, $hourDi, $minuteDi);
        //dd($thoigianDi); die();
        $datepickerVe = Input::get('datepickerVe');
        $hourVe = Input::get('hourVe');
        $minuteVe = Input::get('minuteVe');
        $thoigianVe = $myFunction->changeDatePicker($datepickerVe, $hourVe, $minuteVe);
        $cars_not_in_inner = DB::table('tbl_dondat')
                ->join('tbl_dondatchitiet', 'tbl_dondat.dondat_id', '=', 'tbl_dondatchitiet.dondat_id')
                ->select('tbl_dondatchitiet.xe_id')
                ->where('tbl_dondat.ngaydi', '<=', $thoigianDi)
                ->where('tbl_dondat.ngayve' , '>=', $thoigianVe)
                ->get();

        $cars_not_in_lower = DB::table('tbl_dondat')
                ->join('tbl_dondatchitiet', 'tbl_dondat.dondat_id' , '=', 'tbl_dondatchitiet.dondat_id')
                ->select('tbl_dondatchitiet.xe_id')
                ->where('tbl_dondat.ngaydi', '>=', $thoigianDi)
                ->where('tbl_dondat.ngaydi' , '<=', $thoigianVe)
                ->where('tbl_dondat.ngayve', '>=' , $thoigianVe)
                ->get();

        $cars_not_in_higher = DB::table('tbl_dondat')
                ->join('tbl_dondatchitiet', 'tbl_dondat.dondat_id' , '=', 'tbl_dondatchitiet.dondat_id')
                ->select('tbl_dondatchitiet.xe_id')
                ->where('tbl_dondat.ngaydi', '<=', $thoigianDi)
                ->where('tbl_dondat.ngayve' , '<=', $thoigianVe)
                ->where('tbl_dondat.ngayve', '>=' , $thoigianDi)
                ->get();      

        $cars_not_in_outer = DB::table('tbl_dondat')
                ->join('tbl_dondatchitiet', 'tbl_dondat.dondat_id' , '=', 'tbl_dondatchitiet.dondat_id')
                ->select('tbl_dondatchitiet.xe_id')
                ->where('tbl_dondat.ngaydi', '>=', $thoigianDi)
                ->where('tbl_dondat.ngayve' , '<=', $thoigianVe)
                ->get();
        
        $cars_not_in = array_merge($cars_not_in_inner, $cars_not_in_outer, $cars_not_in_higher, $cars_not_in_lower);
        // đổi array object cars thành array cars
        $cars_length = count($cars_not_in);
        $array_car_not_in = array();
        for($i = 0; $i< $cars_length; $i++){
            $array_car_not_in[$i] = $cars_not_in[$i]->xe_id;
        }
        // đổi xong
        //dd($cars_not_in); die();
        //dd($cars_not_in[0]); die();
        // $cars_not_final = array_unique($cars_not_in);
        $data = DB::table('tbl_xe')
                ->select('tbl_xe.hang_xe', 'tbl_xe.sodangky_xe')
                ->whereNotIn('tbl_xe.xe_id', $array_car_not_in)->orderBy('xe_id', 'asc')
                ->get();
        return view('backend.booking.booking', compact('data'));
        // dd($thoigianVe); die();
    }

    public function getDatXe(){
        return view('backend.booking.datxe');
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
