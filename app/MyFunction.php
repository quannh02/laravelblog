<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyFunction extends Model
{
	/** DoiDinhDangThoiGian
     * Datepicker 
     * Đổi và ghép thời gian thành 'yyyy:mm:dd hh:ii:ss'
     *
     *
     */
    function stripUnicode($str){
        if(!$str) return false;
        $unicode = array(
            'a' => 'à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ',
            'A' => 'À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ',
            'd' => 'đ',
            'D' => 'Đ',
            'e' => 'è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ',
            'E' => 'È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ',
            'i' => 'ì|í|ị|ỉ|ĩ',
            'I' => 'Ì|Í|Ị|Ỉ|Ĩ',
            'o' => 'ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ',
            'O' => 'Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ',
            'u' => 'ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ',
            'U' => 'Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ',
            'y' => 'ỳ|ý|ỵ|ỷ|ỹ',
            'Y' => 'Ỳ|Ý|Ỵ|Ỷ|Ỹ'
        );
        foreach($unicode as $khongdau => $codau){
            $arr = explode("|", $codau);
            $str = str_replace($arr, $khongdau, $str);
        }
        return $str;
    }
    function changedatetimeformat($datetime){
        list($day, $month, $year, $hour, $minute, $dayType) = preg_split("/[\/\s:]/", $datetime);
        return $strdatetime = $year . ':' . $month . ':' . $day . ' ' . ($dayType == "PM" ? $hour + 12 : $hour) . ":" . $minute . ":00";
    }
    function laixe($banglaixe){
        $matrix = array(
            'B2' => array(4,7),
            'C' => array(4,7),
            'D' => array(4,7,16,29),
            'E' =>  array(4,7,16,29,35,45),
            'FB2' => array(4,7),
            'FC' => array(4,7),
            'FD' => array(4,7,16,29),
            'FE' =>  array(4,7,16,29,35,45)
            );
        return $matrix[$banglaixe];
    }
}
