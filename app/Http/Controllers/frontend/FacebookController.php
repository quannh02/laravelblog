<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use Socialize;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\MyFunction;
use Auth;
use App\User;
class FacebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function facebook()
    {
        return Socialize::driver('facebook')->redirect();
    }

    
    /**
     * Obtain the user information from Facebook.
     *
     * @return Response
     */
    public function callback()
    {
        try {
            $user = Socialize::driver('facebook')->user();
        } catch (Exception $e) {
            return redirect('/facebook');
        }
        dd($user); die();
        $authUser = $this->findOrCreateUser($user);

        Auth::login($authUser, true);
        //Tracker::hit();
        return redirect()->intended('/');
    }

    /**
     * Return user if exists; create and return if doesn't
     *
     * @param $facebookUser
     * @return User
     */
    private function findOrCreateUser($facebookUser)
    {
        $authUser = User::where('social_id', $facebookUser->id)->first();

        if ($authUser) {
            return $authUser;
        }
        $a = new MyFunction;
        $username = $a->stripUnicode($facebookUser->name);
        return User::create(
            [
                'tendaydu' => $username,
                //'full_name' => $facebookUser->name,
                'email' => $facebookUser->email,
                'social_id' => $facebookUser->id,
                //'avatar' => $facebookUser->avatar,
                'remember_token' => $facebookUser->token,
                'terms' => 1,
                //'total_post' => 0,
                //'active'=>1
            ]
        );
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
