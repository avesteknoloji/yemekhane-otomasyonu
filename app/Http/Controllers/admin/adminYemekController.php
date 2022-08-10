<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\yemek;

class adminYemekController extends Controller
{
    public function index(){

        $title="Yemek Listesi";

        //test orgninazation
            
        //$yemekler = yemek::orderBy('id','asc')->with('yemek_kategori')->get();
        $yemekler = yemek::with('kategori')->get();

        return view('admin.apps.yonetim.yemek-listele', compact('title','yemekler'));
    }
    public function form(){
     
        return view('admin.apps.yonetim.yemek-listele');

    }
}
