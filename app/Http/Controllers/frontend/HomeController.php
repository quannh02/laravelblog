<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\DiaDiem;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use App\Vote;
use App\Cars;
use App\Comment;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$tinhs = DiaDiem::select('id', 'name')->where('parent_id', 0)->get();
        return view('frontend.pages.index', compact('tinhs'));
    }

    public function returnDiaDanh($id){
        $tinhs = DiaDiem::select('id', 'name')->where('parent_id', $id)->get()->toArray();
        //dd($a); die();
        return json_encode($tinhs);
        //dd($a); die();
    }
    public function getChiTiet(){
        $binhluans = Comment::all();
        $id = 1;
        $vote_id = Vote::select('id')->where('xe_id', $id)->get()->first();
        return view('frontend.pages.chitiet', compact('vote_id', 'binhluans'));
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
    public function search(){
        $q = Input::get('q');
        $car = Cars::where('hang_xe','LIKE','%'.$q.'%')->orWhere('socho_xe','LIKE','%'.$q.'%')->get();
        if(count($car) > 0)
        return view('frontend.pages.searchresult')->withDetails($car)->withQuery($q);
        else return view ('frontend.pages.searchresult')->withMessage('Không tìm thấy kết quả. Bạn thử tìm lại lần nữa !');
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
