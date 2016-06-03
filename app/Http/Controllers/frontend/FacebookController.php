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
    
}
