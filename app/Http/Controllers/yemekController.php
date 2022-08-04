<?php

namespace App\Http\Controllers;

use App\Models\yemek_kategori;
use App\Models\yemek;
use Illuminate\Http\Request;

class yemekController extends Controller
{
    public function index(){

        $kategoriler = yemek_kategori::all();
       
        $yemekler = yemek::orderBy('yemek_ad','asc')->where(function($query){
            if ($yemekKategoriID=request('yemekKategoriId')){
              $query->where('yemek_kategori_id', $yemekKategoriID);
            } 
           
        })->get();
              
        return view('admin.apps.ecommerce.yemek',compact('kategoriler','yemekler'));
        
    }

    public function ara(){
        $aranan=request()->input('aranan');
        $yemekler=yemek::where('yemek_ad','like',"%$aranan%")->get();
        $kategoriler = yemek_kategori::all();

        //requesti hafızada tutuyor
        request()->flash();

        return view('admin.apps.ecommerce.yemek', compact('yemekler','kategoriler'));
    }
}
