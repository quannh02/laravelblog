<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Hash;
use App\User;
use Input;
//use App\Order;
//use Carbon\Carbon;
use App\Http\Requests\EditUserRequest;
class UserController extends Controller
{
    
    public function index()
    {
        $data = User::select('nguoidung_id', 'tendaydu', 'email', 'diachi', 'sodienthoai', 'tencongty', 'masothue', 'gioitinh', 'terms')->get()->toArray();
       // $orderCount = Order::count();
        return view('backend.user.list', compact('data'));
    }

    public function create()
    {
        return view('backend.user.add');
    }

    
    public function store(UserRequest $request)
    {
        $user = new User;
        $user->fullname = $request->txtUser;
        $user->email= $request->txtEmail;
        $user->password = Hash::make($request->txtPass);
        $user->save();      
        return redirect()->route('user.index');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $data = User::where('nguoidung_id', $id)->get()->first();
        //dd($data); die();
        return view('backend.user.edit', compact('data'));
    }

    
    public function update(EditUserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->tendaydu = $request->txtUser;
        $user->password = Hash::make($request->txtPass);
        $user->save();
        return redirect()->route('user.index');
    }

    
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
