<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\ProfileRequest;
use Auth;
use Input;
use Hash;
use Session;
use App\Models\CustomerAddress;
class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }
    public function getRegister(){
        return view('backend.auth.register');
    }
    public function postRegister(RegisterRequest $request){
            $newUser = new User;
            $newUser->tendaydu = $request->name;
            $newUser->email    = $request->email;
            $newUser->password = Hash::make($request->password);
            $newUser->remember_token = $request->_token;
            $newUser->save();
            Session::flash('message', 'Đăng ký thành công!'); 
            Session::flash('alert-class', 'alert-success'); 
            return redirect()->route('backend.getLogin');
    }
    public function getLogin(){
        if(isset(Auth::user()->nguoidung_id)){
            return redirect()->route('admin.dashboard');
        }
        return view('backend.auth.login');
    }

    public function postLogin(LoginRequest $request){
        $auth = array(
              'email' => $request->email,
              'password' => $request->password
           );
        if(Auth::attempt($auth)){
                if(Session::has('datxe')){
                    return redirect()->route('getdatxe');
            } else { 
                return redirect()->route('admin.dashboard');}
        } else {
           return redirect()->back()->with(['flash_level'=> 'danger', 'flash_message' => 'Email hoặc password chưa đúng, vui lòng nhập lại!']);;
        }
    }
    protected $redirectPath = '/dashboard';
    protected $redirectTo = '/dashboard';

    public function dashboard(){
        
        return view('backend.master');
    }

//    public function getLogout(){
//        if(Auth::check()){
//            Auth::logout();
//            return redirect()->route('admin.getLogin');
//        }
//    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    public function getProfile($id){
        $data = User::findOrFail($id);
        return view('backend.user.profile', compact('data'));
    }
    public function postProfile($id, ProfileRequest $request){
        $data = User::findOrFail($id);
        $data->tendaydu = $request->txtName;
        $data->sodienthoai = $request->txtSoDienThoai;
        $data->tencongty = $request->txtTenCongTy;
        $data->masothue = $request->txtMaSoThue;
        //$data->customer_type = Input::get('customertype');
        $data->diachi = $request->txtAddress;
        // $address = new CustomerAddress([
        //         'address' => Input::get('txtAddress')
        //     ]);
        // dd($data); die();
        $data->save();
        // $data->customeraddress()->save($address);
        return redirect()->route('backend.getProfile', $id);
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
