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
        $entry= new yemek();
        $dosya_adi='';
        $data= request()->only('slug','yemek_ad','yemek_fiyat','stok','yemek_kategori_id');

        //hasFile eğer dosya seçmişsek true
        if(request()->hasFile('yemek_resmi')){
            $this->validate(request(), [
                'yemek_resmi' => 'image|mimes:jpg,jpeg,png,gif|max:2048'
            ]);

            $yemek_resmi=request()->file('yemek_resmi');
        }
             
        //güncelleme işlemi yapılcaksa
        if($id>0){
           //form sayfasından gelen id'ye göre güncelleme işlemi yapıyoruz
           $entry=yemek::where('id', $id)->firstOrFail();
           
           $dosya_adi=$entry->id."-". $entry->slug ."-". time().".".$yemek_resmi->extension();
           $data['yemek_resmi']=$dosya_adi;
          
           $entry->update($data);

           if($yemek_resmi->isValid()){
              
                $yemek_resmi->move(public_path('uploads\images\yemek_resimleri'),$dosya_adi);
            
            }  
           return redirect()->route('yemekListesi')->with('message',"Yemek Başarı ile Güncellendi");
         }
         else {//gelen herhangi bir id yok ise veri tabanına ekleme işlemi yapıyor
            
            $dosya_adi=request()->slug."-". time().".".$yemek_resmi->extension();
            $data['yemek_resmi']=$dosya_adi;
            //dd($data);
            yemek::create($data);

            if($yemek_resmi->isValid()){
              
                $yemek_resmi->move(public_path('uploads\images\yemek_resimleri'),$dosya_adi);
                
            }  
            return redirect()->route('yemekListesi')->with('message',"Yemek Başarı ile Kaydedildi");
        }     

      
        

        
    }
    public function sil($id=0){
   
        yemek::findorFail($id)->delete();   
        return back()->with('message',$id.' Numaralı Yemek Başarı İle Silindi');
    }
    
}
