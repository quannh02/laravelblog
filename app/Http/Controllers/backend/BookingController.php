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
use App\User;
use Auth;
use Session;
use App\Http\Requests\DatXeRequest;

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
        $thoigianDi = date('Y:m:d', strtotime($datepickerDi));
        $hourDi = Input::get('hourDi');
        $minuteDi = Input::get('minuteDi');
        $thoigianDi = '' . $thoigianDi . ' 00:' . $hourDi . ':' . $minuteDi . '';
        //dd($thoigianDi);
        $datepickerVe = Input::get('datepickerVe');
        $thoigianVe = date('Y:m:d', strtotime($datepickerVe));
        $hourVe = Input::get('hourVe');
        $minuteVe = Input::get('minuteVe');
        $thoigianVe = '' . $thoigianVe . ' 00:' . $hourVe . ':' . $minuteVe . '';
        //dd($thoigianVe); die();
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
        $user = User::where('nguoidung_id', Auth::user()->nguoidung_id)->get()->first();
        return view('backend.booking.datxe', compact('user'));

    }
    
    public function postDatXe(DatXeRequest $request){
        $user = User::findOrFail(Auth::user()->nguoidung_id);
        $user->tendaydu = $request->tendaydu;
        $user->email = $request->email; 
        switch ($request->gioitinh) {
            case 1:
                $user->gioitinh = 'Nam';
            break;
            case 0:
                $user->gioitinh = 'Nữ';
                break;
            default:
                $user->gioitinh = 'Không xác định';
        }
        $user->sodienthoai = $request->sodienthoai;
        $user->tencongty = $request->tencongty;
        $user->masothue = $request->masothue;
        $user->save();

        $datxe = new DonDat([
            'diemdon' => $request->diemdon,
            'diemden' => $request->diemden,
            'yeucau'  => $request->yeucau,
            'ngaydi'  => $request->ngaydi,
            'ngayve'  => $request->ngayve
            ]);
        $user->dondat()->save($datxe);
        if(Session::has('datxe'))
        {
        foreach(Session::get('datxe') as $key => $value)
        {
            $dondatchitiet = new DonDatCT([
                'xe_id' => $value['id']
                ]);
            $datxe->dondatchitiet()->save($dondatchitiet);
        }
        }
        return redirect('quanlydondat');
    }
    
    public function quanlydondat(){
        return view('backend.booking.dondat');
    }

    
    
    
}
