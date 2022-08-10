<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\yemek;
use App\Models\yemek_kategori;

class adminYemekController extends Controller
{
    public function index(){

        $title="Yemek Listesi";

        
        $yemekler = yemek::with('kategori')->get();
       // dd($yemekler);
       

        return view('admin.apps.yonetim.yemek-listele', compact('title','yemekler'));
    }
    public function form($id=0){
        
        $yemek_list = yemek::orderBy('yemek_ad','asc')->get(); 
        $entry=new yemek();
        $yemek_kategorileri=yemek_kategori::all();

        if($id>0){
            $entry = yemek::findOrFail($id);   
                
        } 
     
        return view('admin.apps.yonetim.yemek-form',compact('yemek_list','entry','yemek_kategorileri'));

    }
    public function kaydet($id=0){
        
       $data= request()->only('slug','yemek_ad','yemek_fiyat','stok','yemek_kategori_id');
       //dd($data);
    
        if($id>0){
           //form sayfasından gelen id'ye göre güncelleme işlemi yapıyoruz
           $entry=yemek::where('id', $id)->firstOrFail();
           $entry->update($data);
           return redirect()->route('yemekListesi')->with('message',"Yemek Başarı ile Güncellendi");
         }
         else {
            //gelen herhangi bir id yok ise veri tabanına ekleme işlemi yapıyor
            yemek::create(request()->all());
            return redirect()->route('yemekListesi')->with('message',"Yemek Başarı ile Kaydedildi");
        }     
    }
    public function sil($id=0){
   
        yemek::findorFail($id)->delete();   
        return back()->with('message',$id.' Numaralı Yemek Başarı İle Silindi');
    }
    
}
