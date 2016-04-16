<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['fullname', 'email','soDienThoai', 'tenCongTy', 'maSoThue', 'customer_type'];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    public function customeraddress(){
        return $this->hasOne('App\CustomerAddress');
    }
    protected $hidden = ['password', 'remember_token'];
    public static $rules = array(
            'email' => 'required|unique:users',
            'password' => 'required',
            'name' =>'required'
        );
    public static $messages = array(
            'email.required' => 'Vui lòng nhập email.',
            'email.unique'   => 'Email đã được đăng ký!',
            'password.required' => 'Vui lòng nhập password.',
            'name.required' => 'Vui lòng nhập name'
        );
}
