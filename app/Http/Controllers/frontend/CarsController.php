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

class CarsController extends Controller
{
    protected $brands;
    public function __construct(){
        $this->brands = Cars::select('hang_xe')->distinct()->get();
    }

    public function index()
    {
        $brands = $this->brands;
        //dd($brands); die();
        $car_bonlam = Cars::where('socho_xe', 45)->get();
        $car_balam  = Cars::where('socho_xe', 35)->get();
        return view('frontend.pages.index', compact('car_bonlam', 'car_balam', 'brands'));
    }


    public function brandforitem($id){
        $cars = Cars::where('hang_xe', $id)->get();
        return view('frontend.pages.listcar', compact('cars'));
    }

    public function search(){
        $q = Input::get('q');
        $car = Cars::where('hang_xe','LIKE','%'.$q.'%')->orWhere('socho_xe','LIKE','%'.$q.'%')->get();
        if(count($car) > 0)
        return view('frontend.pages.searchresult', compact('cars', 'q'));
        else return view ('frontend.pages.searchresult')->withMessage('Không tìm thấy kết quả. Bạn thử tìm lại lần nữa !');
    }

    public function postVote($id){
        $point = Input::get('point');
        //dd($point); die();
        $currentVote = Vote::findOrFail($id);
        //dd($currentVote); die();
        $currentVote->sovotes = $currentVote->sovotes + 1;
        $currentVote->tongdiem = $currentVote->tongdiem +  $point;
        $currentVote->save();
        $updateVote = Vote::select('sovotes', 'tongdiem')->where('xe_id', $id)->get()->first();
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
    
    public function getChiTiet(){
        $binhluans = Comment::all();
        $id = 1;
        $vote_id = Vote::select('id')->where('xe_id', $id)->get()->first();
        return view('frontend.pages.chitiet', compact('vote_id', 'binhluans'));
    }
}
