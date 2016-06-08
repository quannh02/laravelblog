<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\TinTuc;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cars;
use App\Brand;

class TinTucController extends Controller
{
    protected $brands;
    protected $sochoxe;
    protected $tintucs;
    public function __construct(){
        $this->brands = Brand::all();
        $this->sochoxe = Cars::select('socho_xe')->distinct()->get();
        $this->tintucs = TinTuc::select('id', 'tieude', 'noidung')->orderBy('id', 'desc')->take(5)->get();
    }
    
    public function getTinTuc(){
        $brands = $this->brands;
        $socho = $this->sochoxe;
        $tintucs  = TinTuc::all();
        return view('frontend.pages.tintuc', compact('tintucs', 'socho', 'brands'));
    }
    public function chitiettintuc($id){
        $brands = $this->brands;
        $socho = $this->sochoxe;
        $tintucs = $this->tintucs;
        $tintuc = TinTuc::where('id', $id)->get()->first();
        $tintuckhac = TinTuc::whereNotIn('id', [$id])->get();
        return view('frontend.pages.chitiettintuc', compact('tintuc', 'tintucs', 'socho', 'brands', 'tintuckhac'));
    }
    
}
