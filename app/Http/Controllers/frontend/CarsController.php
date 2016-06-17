<?php

namespace App\Http\Controllers\frontend;
use DB;
use Illuminate\Http\Request;
use App\Cars;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use App\Vote;
use App\Comment;
use App\TinTuc;
use App\TaiXe;
use App\User;
use Session;
use App\Brand;

class CarsController extends Controller
{
    protected $brands;
    protected $sochoxe;
    protected $tintucs;
    public function __construct(){
        $this->brands = Brand::all();
        $this->sochoxe = Cars::select('socho_xe')->distinct()->orderBy('socho_xe','asc')->get();
        $this->tintucs = TinTuc::select('id', 'tieude', 'noidung')->orderBy('id', 'desc')->take(5)->get();
    }

    public function index()
    {
        $brands = $this->brands;
        $socho = $this->sochoxe;


        //dd($brand); die();
        $tintucs = $this->tintucs;
        $car_bonlam     = Cars::where('socho_xe', 45)->orderBy('xe_id', 'desc')->take(6)->get();
        $car_balam      = Cars::where('socho_xe', 35)->orderBy('xe_id', 'desc')->take(6)->get();
        $car_haichin    = Cars::where('socho_xe', 29)->orderBy('xe_id', 'desc')->take(6)->get();
        $car_muoisau    = Cars::where('socho_xe', 16)->orderBy('xe_id', 'desc')->take(6)->get();
        $car_bay        = Cars::where('socho_xe', 7)->orderBy('xe_id', 'desc')->take(6)->get();
        $car_bon        = Cars::where('socho_xe', 4)->orderBy('xe_id', 'desc')->take(6)->get();
        return view('frontend.pages.index', compact(
            'car_bonlam', 
            'car_balam', 
            'car_haichin',
            'car_muoisau', 
            'car_bay', 
            'car_bon', 
            'brands', 
            'socho', 
            'tintucs'
        ));
    }


    public function getCarHang($id){
        $brands = $this->brands;
        $socho = $this->sochoxe;
        //dd($brands); die();
        $tintucs = $this->tintucs;
        $cars = Cars::where('hang_id', $id)->get();
        return view('frontend.pages.listcar', compact('cars','socho', 'tintucs', 'brands'));
    }

    public function socho($id){
        $brands = $this->brands;
        $socho = $this->sochoxe;
        //dd($brands); die();
        $tintucs = $this->tintucs;
        $cars = Cars::where('socho_xe', $id)->get();
        //dd($cars);
        return view('frontend.pages.listcar', compact('cars', 'socho', 'tintucs', 'brands'));
    }

    public function search(){
        $brands = $this->brands;
        $socho = $this->sochoxe;
        //dd($brands); die();
        $tintucs = $this->tintucs;
        $q = Input::get('q');
        $cars = Cars::where('ten_xe', 'LIKE','%'.$q.'%')->orWhere('socho_xe','LIKE','%'.$q.'%')->orWhere(
                function($query) use ($q){
                    $brands = Brand::where('hang_name', 'LIKE', '%'. $q.'%')->get()->toArray();
                    //dd($brand);
                    $hang_id = array();
                    foreach($brands as $key => $value){
                        array_push($hang_id, $value['hang_id']);
                    }
                    $query->whereIn('hang_id', $hang_id);
                })->get();
        return view('frontend.pages.searchresult', compact('cars', 'q', 'brands', 'socho', 'tintucs'));
    }

    public function postVote($id){
        if(Session::has('votexe')){
            $updateVote = Vote::select('sovotes', 'tongdiem')->where('cars_id', $id)->get()->first();
            $roundVote = round(($updateVote->tongdiem/$updateVote->sovotes), 1);
            $arrayForVoting = array(
            'votes' => $updateVote->sovotes,
            'points' => $updateVote->tongdiem,
            'roundVote'=> $roundVote
            );

        //dd($roundVote); die();
        //dd($updateVote); die();
            return json_encode($arrayForVoting);
        } else {
        Session::push('votexe', 'Bạn đã vote');
        $point = Input::get('point');
        //dd($point); die();
        $vote_id = Vote::select('id')->where('cars_id', $id)->get()->first();
        $currentVote = Vote::findOrFail($vote_id->id);
        //dd($currentVote); die();
        $currentVote->sovotes = $currentVote->sovotes + 1;
        $currentVote->tongdiem = $currentVote->tongdiem +  $point;
        $currentVote->save();
        $updateVote = Vote::select('sovotes', 'tongdiem')->where('cars_id', $id)->get()->first();

        $roundVote = round(($updateVote->tongdiem/$updateVote->sovotes), 1);

        $arrayForVoting = array(
            'votes' => $updateVote->sovotes,
            'points' => $updateVote->tongdiem,
            'roundVote'=> $roundVote
            );

        //dd($roundVote); die();
        //dd($updateVote); die();
        return json_encode($arrayForVoting);
        }
    }
    
    public function getChiTiet($id){
        $brands = $this->brands;
        $socho = $this->sochoxe;
        $tintucs = $this->tintucs;
        $binhluans = Comment::where('xe_id', $id)->orderBy('id', 'desc')->paginate(3);
        
        foreach($binhluans as $key => $value){
           if($value->nguoidung_id != NULL) {
                $user = User::where(
                    'nguoidung_id', $value->nguoidung_id)
                    ->get()
                    ->first();
                $value->nguoidung_id = $user->tendaydu;
            }
        }


        //dd($binhluans);
        // xe hiện tại
        $xe = Cars::where('xe_id', $id)->get()->first();
        // tên lái xe theo xe
        $tenlaixe = TaiXe::where('taixe_id', $xe->tai_xe_id)->get()->first();

        $xekhac = Cars::whereNotIn('xe_id', [$id])->where(function($query) use ($xe){
                        $query->where('socho_xe', $xe->socho_xe)
                        ->orWhere('hang_id', $xe->hang_id);
        })->get();
        //dd($xekhac);
        //dd($xe); die();
        $vote_id = Vote::where('cars_id', $id)->get()->first();
        if($vote_id->sovotes != 0){
            $roundVote = round(($vote_id->tongdiem/$vote_id->sovotes), 1);
        } else {
            $roundVote = 0;
        }
        //dd($vote_id);
        return view('frontend.pages.chitiet', compact(
            'vote_id', 
            'binhluans', 
            'xe', 
            'socho', 
            'brands',
            'tintucs',
            'tenlaixe', 
            'xekhac', 
            'roundVote'
        ));
    }

    public function themgioxe($id){
        $xe = Cars::where('xe_id', $id)->get()->first();
        $index = -1;
            if(Session::has('datxe')) {
                foreach(Session::get('datxe') as $key => $value){
                    //dd($key); die();
                    if($id == Session::get('datxe')[$key]['id']) {
                        $index = $key;
                        break;
                    }
                }
                if($index === -1) {
                    $item = array(
                    'id' => $id,
                    'name' => $xe->hang_xe . ' ' . $xe->ten_xe,
                    'socho'    => $xe->socho_xe,
                    'color'      => $xe->color,
                    'image'     => $xe->url_hinhxe,
                    'bienso'    => $xe->sodangky_xe,
                    'ngaysanxuat' => $xe->ngaysanxuat
                    //'laixe'     => $xe->taixe_xe
                    );
                    //dd($item);
                    Session::push('datxe', $item);
                }      
            } else {
                $item = array(
                    'id' => $id,
                    'name' => $xe->hang_xe . ' ' .$xe->ten_xe,
                    'socho'    => $xe->socho_xe,
                    'color'      => $xe->color,
                    'image'     => $xe->url_hinhxe,
                    'bienso'    => $xe->sodangky_xe,
                    'ngaysanxuat' => $xe->ngaysanxuat
                    //'laixe'     => $xe->taixe_xe
                    );
                Session::push('datxe', $item);
            }   

            return redirect('gioxe');
    }
    public function getgioxe(){
        $brands = $this->brands;
        $socho = $this->sochoxe;
        $tintucs = $this->tintucs;
        return view('frontend.pages.dsdat', compact('brands', 'socho', 'tintucs'));
    }
    public function delete(){
        Session::forget('datxe');
        return redirect('gioxe');
    }
    public function bangGia(){
        $brands = $this->brands;
        $socho = $this->sochoxe;
        $tintucs = $this->tintucs;
        return view('frontend.pages.banggia', compact('brands', 'socho', 'tintucs'));
    }
    public function cacbuocthuexe(){
        $brands = $this->brands;
        $socho = $this->sochoxe;
        $tintucs = $this->tintucs;
        return view('frontend.pages.thuexe', compact('brands', 'socho', 'tintucs'));
    }
}
