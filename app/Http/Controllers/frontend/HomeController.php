<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\DiaDiem;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use App\Vote;
use App\Cars;

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
        $tinhs = DiaDiem::select('id', 'name')->where('parent_id', 0)->get();
        $id = 1;
        $vote_id = Vote::select('id')->where('carId', $id)->get()->first();
        return view('frontend.pages.chitiet', compact('vote_id', 'tinhs'));
    }
    public function postVote($id){
        $point = Input::get('point');
        //dd($point); die();
        $currentVote = Vote::findOrFail($id);
        //dd($currentVote); die();
        $currentVote->votes = $currentVote->votes + 1;
        $currentVote->points = $currentVote->points +  $point;
        $currentVote->save();
        $updateVote = Vote::select('votes', 'points')->where('carId', $id)->get()->first();
        $roundVote = round(($updateVote->points/$updateVote->votes), 1);

        $arrayForVoting = array(
            'votes' => $updateVote->votes,
            'points' => $updateVote->points,
            'roundVote'=> $roundVote
            );

        //dd($roundVote); die();
        //dd($updateVote); die();
        return json_encode($arrayForVoting);
    }
    public function search(){
        $q = Input::get ( 'q' );
        $car = Cars::where('hang_xe','LIKE','%'.$q.'%')->orWhere('socho_xe','LIKE','%'.$q.'%')->get();
        if(count($car) > 0)
        return view('frontend.pages.searchresult')->withDetails($car)->withQuery($q);
        else return view ('frontend.pages.searchresult')->withMessage('No Details found. Try to search again !');
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
