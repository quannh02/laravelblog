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
    

    public function getListCar(){
        return view('backend.booking.booking');
    }
    
    public function postListCar(){
        $datepickerDi = Input::get('datepickerDi');
        //dd($datepickerDi); die();
        // đổi sang dạng YYYY:mm:dd H:i:s
        $MyFunction = new MyFunction;
        $thoigianDi = $MyFunction->changedatetimeformat($datepickerDi);
        //dd($thoigianDi);
        $datepickerVe = Input::get('datepickerVe');
        $thoigianVe = $MyFunction->changedatetimeformat($datepickerVe);
        //dd($thoigianVe); die();
        $cars_not_in_inner = DB::table('tbl_dondat')
                ->join('tbl_dondatchitiet', 'tbl_dondat.dondat_id', '=', 'tbl_dondatchitiet.don_dat_id')
                ->select('tbl_dondatchitiet.xe_id')
                ->where('tbl_dondat.ngaydi', '<=', $thoigianDi)
                ->where('tbl_dondat.ngayve' , '>=', $thoigianVe)
                ->get();

        $cars_not_in_lower = DB::table('tbl_dondat')
                ->join('tbl_dondatchitiet', 'tbl_dondat.dondat_id' , '=', 'tbl_dondatchitiet.don_dat_id')
                ->select('tbl_dondatchitiet.xe_id')
                ->where('tbl_dondat.ngaydi', '>=', $thoigianDi)
                ->where('tbl_dondat.ngaydi' , '<=', $thoigianVe)
                ->where('tbl_dondat.ngayve', '>=' , $thoigianVe)
                ->get();

        $cars_not_in_higher = DB::table('tbl_dondat')
                ->join('tbl_dondatchitiet', 'tbl_dondat.dondat_id' , '=', 'tbl_dondatchitiet.don_dat_id')
                ->select('tbl_dondatchitiet.xe_id')
                ->where('tbl_dondat.ngaydi', '<=', $thoigianDi)
                ->where('tbl_dondat.ngayve' , '<=', $thoigianVe)
                ->where('tbl_dondat.ngayve', '>=' , $thoigianDi)
                ->get();      

        $cars_not_in_outer = DB::table('tbl_dondat')
                ->join('tbl_dondatchitiet', 'tbl_dondat.dondat_id' , '=', 'tbl_dondatchitiet.don_dat_id')
                ->select('tbl_dondatchitiet.xe_id')
                ->where('tbl_dondat.ngaydi', '>=', $thoigianDi)
                ->where('tbl_dondat.ngayve' , '<=', $thoigianVe)
                ->get();
        
        $cars_not_in = array_merge($cars_not_in_inner, $cars_not_in_outer, $cars_not_in_higher, $cars_not_in_lower);
        // đổi array object cars thành array cars
        
        $array_car_not_in = array();
        foreach($cars_not_in as $key => $value){
            array_push($array_car_not_in, $value->xe_id);
        }
        // đổi xong
        //dd($cars_not_in); die();
        //dd($cars_not_in[0]); die();
        $data = DB::table('tbl_xe')
                ->select('tbl_xe.hang_xe', 'tbl_xe.sodangky_xe')
                ->whereNotIn('tbl_xe.xe_id', $array_car_not_in)->orderBy('xe_id', 'asc')
                ->get();
        return view('backend.booking.booking', compact('data', 'datepickerDi', 'datepickerVe'));
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
        $MyFunction = new MyFunction;
        $ngaydi = $MyFunction->changedatetimeformat($request->ngaydi);
        $ngayve = $MyFunction->changedatetimeformat($request->ngayve);
        $datxe = new DonDat([
            'diemdon' => $request->diemdon,
            'diemden' => $request->diemden,
            'yeucau'  => $request->yeucau,
            'ngaydi'  => $ngaydi,
            'ngayve'  => $ngayve
            ]);
        $user->dondat()->save($datxe);
        if(Session::has('datxe')){
            foreach(Session::get('datxe') as $key => $value){
                    $dondatchitiet = new DonDatCT([
                        'xe_id' => $value['id']
                        ]);
                    $datxe->dondatchitiet()->save($dondatchitiet);
                }
        }
        Session::forget('datxe');
        return redirect('quanlydondat');
    }
    
    public function quanlydondat(){ // quan ly danh sach dat xe cua nguoi dung
        $dondats = DonDat::where('user_id', '=', Auth::user()->nguoidung_id)->get()->toArray();
        //dd($dondats); die();
        foreach($dondats as $key => $dondat){
            $dondatchitiets = DonDatCT::where('don_dat_id', '=' , $dondat['dondat_id'])
                ->join('tbl_xe', 'tbl_xe.xe_id' , '=' , 'tbl_dondatchitiet.xe_id')
                ->join('tbl_taixe' , 'tbl_xe.tai_xe_id' , '=' , 'tbl_taixe.taixe_id')
                ->get()->toArray();
            //dd($dondatchitiets); die();
            
            array_push($dondats[$key], $dondatchitiets);
        }
        //dd($dondats); die();
        return view('backend.booking.dondat',compact('dondats'));
    }

    public function admindondat(){ // quan ly danh sach dat xe cua admin
        $dondats = DonDat::orderBy('dondat_id', 'desc')->get()->toArray();
        foreach($dondats as $key => $dondat){
            $dondatchitiets = DonDatCT::where('don_dat_id', '=' , $dondat['dondat_id'])
                ->join('tbl_xe', 'tbl_xe.xe_id' , '=' , 'tbl_dondatchitiet.xe_id')
                ->join('tbl_taixe' , 'tbl_xe.tai_xe_id' , '=' , 'tbl_taixe.taixe_id')
                ->get()->toArray();
            //dd($dondatchitiets); die();
            
            array_push($dondats[$key], $dondatchitiets);
        }
        return view('backend.booking.dondat', compact('dondats'));
    }

    public function duyetdondat($id){
        $dondat = DonDat::findOrFail($id);
        $dondat->active = 1;
        $dondat->save();
        return redirect('quanlydatxe');
    }
    public function chitietnguoidung($id){
        $nguoidung = User::findOrFail($id);
        //dd($nguoidung);
        return view('backend.booking.chitietnguoidung', compact('nguoidung'));
    }
    
    
}
