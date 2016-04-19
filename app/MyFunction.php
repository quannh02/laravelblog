<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyFunction extends Model
{
	/** DoiDinhDangThoiGian
     * Đổi và ghép thời gian thành 'yyyy:mm:dd hh:ii:ss'
     *
     *
     */
    public function DoiDinhDangThoiGian($datepicker, $hour, $minute){
        $a = explode('/', $datepicker);
        $b = $a[0];
        $a[0] = $a[2];
        $a[2] = $b;
        $b = $a[1];
        $a[1] = $a[2];
        $a[2] = $b;
        //dd($a); die();
        $datepicker = implode(':', $a);
        //dd($datepickerDi); die();
        $second = '00';
        $hourAndMinute = array($hour, $minute, $second);
        $hourAndMinuteStr = implode(':', $hourAndMinute);
        //dd($hourAndMinuteDiStr); die();
        $thoigian = $datepicker . ' ' . $hourAndMinuteStr;
        return $thoigian;
    }
}
