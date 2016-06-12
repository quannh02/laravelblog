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
use App\Brand;
use App\Cars;
use App\TinTuc;

class BookingController extends Controller
{
    

    protected $brands;
    protected $sochoxe;
    protected $tintucs;
    public function __construct(){
        $this->brands = Brand::all();
        $this->sochoxe = Cars::select('socho_xe')->distinct()->orderBy('socho_xe','asc')->get();
        $this->tintucs = TinTuc::select('id', 'tieude', 'noidung')->orderBy('id', 'desc')->take(5)->get();
    }

    public function getListCar(){
        return view('backend.booking.booking');
    }
    
    public function postListCar(){
        $datepickerDi = Input::get('datepickerDi');
        //dd($datepickerDi); die();
        
        $MyFunction = new MyFunction;
        $thoigianDi = $MyFunction->changedatetimeformat($datepickerDi);
        //dd($thoigianDi);
        $datepickerVe = Input::get('datepickerVe');
        $thoigianVe = $MyFunction->changedatetimeformat($datepickerVe);
        //dd($thoigianVe); die();
        $cars_not_in = DB::table('tbl_dondat')
                ->join('tbl_dondatchitiet', 'tbl_dondat.dondat_id', '=', 'tbl_dondatchitiet.don_dat_id')
                ->select('tbl_dondatchitiet.xe_id')
                ->where(function($query) use($thoigianDi, $thoigianVe){
                    $query->where('tbl_dondat.ngaydi', '<=', $thoigianDi)
                        ->where('tbl_dondat.ngayve' , '>=', $thoigianVe);
                })
                ->orWhere(function($query) use($thoigianDi, $thoigianVe){
                    $query->where('tbl_dondat.ngaydi', '>=', $thoigianDi)
                        ->where('tbl_dondat.ngaydi' , '<=', $thoigianVe)
                        ->where('tbl_dondat.ngayve', '>=' , $thoigianVe);
                })
                ->orWhere(function($query) use($thoigianDi, $thoigianVe){
                    $query->where('tbl_dondat.ngaydi', '<=', $thoigianDi)
                        ->where('tbl_dondat.ngayve' , '<=', $thoigianVe)
                        ->where('tbl_dondat.ngayve', '>=' , $thoigianDi);
                })
                ->orWhere(function($query) use($thoigianDi, $thoigianVe){
                    $query->where('tbl_dondat.ngaydi', '>=', $thoigianDi)
                        ->where('tbl_dondat.ngayve' , '<=', $thoigianVe);
                })
                ->get();
        //dd($cars_not_in); die();
        $array_car_not_in = array();
        foreach($cars_not_in as $key => $value){
            array_push($array_car_not_in, $value->xe_id);
        }
        // đổi xong
        dd($array_car_not_in); die();
        //dd($cars_not_in[0]); die();
        $data = DB::table('tbl_xe')
                ->join('tbl_hang','tbl_xe.hang_id', '=' , 'tbl_hang.hang_id')
                ->select('tbl_hang.hang_name','tbl_xe.xe_id', 'tbl_xe.sodangky_xe', 'tbl_xe.ten_xe', 'tbl_xe.url_hinhxe')
                ->whereNotIn('tbl_xe.xe_id', $array_car_not_in)->orderBy('xe_id', 'asc')
                ->get();
        return view('backend.booking.booking', compact('data', 'datepickerDi', 'datepickerVe'));
        // dd($thoigianVe); die();
    }

    public function getDatXe(){
        if(Session::has('datxe')){
        $user = User::where('nguoidung_id', Auth::user()->nguoidung_id)->get()->first();
        return view('backend.booking.datxe', compact('user'));
        } else {
            $brands = $this->brands;
            $socho = $this->sochoxe;
            $tintucs = $this->tintucs;
            return view('frontend.pages.dsdat', compact('brands','socho', 'tintucs'))->with('flash_message', 'Bạn chưa đặt xe nào!');
        }

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
        
        foreach(Session::get('datxe') as $key => $value){
            $dondatchitiet = new DonDatCT([
                    'xe_id' => $value['id']
                ]);
            $datxe->dondatchitiet()->save($dondatchitiet);
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
                ->join('tbl_hang', 'tbl_hang.hang_id', '=' , 'tbl_xe.hang_id')
                ->get()->toArray();
            //dd($dondatchitiets); die();
            
            array_push($dondats[$key], $dondatchitiets);
        }
        //dd($dondats); die();
        return view('backend.booking.dondatmember',compact('dondats'));
    }

    public function admindondat(){ // quan ly danh sach dat xe cua admin
        $dondats = DB::table('tbl_dondat')
            ->join('tbl_nguoidung', 'tbl_dondat.user_id', '=', 'tbl_nguoidung.nguoidung_id')
            ->orderBy('tbl_dondat.dondat_id', 'asc')
            ->get();
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
    public function chitietdondat($id){
        $chitiets = DB::table('tbl_dondatchitiet')
            ->join('tbl_xe', 'tbl_dondatchitiet.xe_id', '=', 'tbl_xe.xe_id')
            ->join('tbl_hang', 'tbl_hang.hang_id', '=' , 'tbl_xe.hang_id')
            ->join('tbl_taixe', 'tbl_xe.tai_xe_id', '=', 'tbl_taixe.taixe_id')
            ->get();
            return view('backend.booking.chitietdondat', compact('chitiets'));
    }
    
}
