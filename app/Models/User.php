<?php

namespace App\Models;

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
    protected $table = 'tbl_nguoidung';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'nguoidung_id';
    protected $fillable = [
        'tendaydu', 
        'social_id', 
        'email', 
        'diachi', 
        'sodienthoai', 
        'tencongty', 
        'masothue', 
        'gioitinh', 
        'terms'
    ];
    public function dondat(){
        return $this->hasMany('App\Models\DonDat');
    }
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    // public function customeraddress(){
    //     return $this->hasOne('App\CustomerAddress');
    // }
    protected $hidden = ['password', 'remember_token'];
    public static $rules = array(
            'email' => 'required|unique:tbl_nguoidung',
            'password' => 'required',
            'name' =>'required',
            'password_confirmation' => 'required|same:password'
        );
    public static $messages = array(
            'email.unique'   => 'Email đã được đăng ký!',
            'password.required' => 'Vui lòng nhập password.',
            'password_confirmation.required' => 'Vui lòng nhập lại mật khẩu',
            'name.required' => 'Vui lòng nhập name',
            'password_confirmation.same' => 'Password chưa giống nhau'
        );
}
