<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\BinhLuanRequest;
use App\Models\Comment;

class BinhLuanController extends Controller
{
    
    public function binhluan(BinhLuanRequest $request, $id, $xe_id){
        $binhluan = new Comment;
        $binhluan->xe_id = $xe_id;
        $binhluan->nguoidung_id = $id;
        $binhluan->noidung = $request->txtbinhluan;
        $binhluan->save();
        return redirect()->route('chitietsp', $xe_id);
    }
    
    
}
