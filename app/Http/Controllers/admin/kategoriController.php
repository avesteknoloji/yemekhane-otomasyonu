<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\yemek_kategori;
use Dotenv\Parser\Entry;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class kategoriController extends Controller
{
public function index(){

    //if (request()->filled('aranan') || request()->filled('ust_id')) {
       // request()->flash();
        //$aranan = request('aranan');
        //$ust_id = request('ust_id');
        $list = yemek_kategori::orderBy('id','asc')->get();
        //::with('yemek_kategori_ust')
            //->where('yemek_kategori_ad', 'like', "%$aranan%")
            //->where('ust_id', $ust_id)
            
            //->paginate(10)
            //->appends(['aranan' => $aranan, 'ust_id' => $ust_id]);
    //} else {
        //request()->flush();
      //  $list = yemek_kategori::with('yemek_kategori_ust')->orderByDesc('id')->paginate(8);
    //}
    
    //$anakategoriler = Kategori::whereRaw('ust_id is null')->get();
    
    //return view('yonetim.kategori.index', compact('list', 'anakategoriler'));

    return view('admin.apps.kategoriler.kategori-listele', compact('list'));
}

public function form($id=0){

    $list = yemek_kategori::orderBy('yemek_kategori_ad','asc')->get(); 
    $entry=new yemek_kategori();
    $ust_kategori =new yemek_kategori();

    if($id>0){
        $entry = yemek_kategori::findOrFail($id);
        $ust_kategori = yemek_kategori::find($entry->yemek_kategori_ust);
        if ($ust_kategori==null) $ust_kategori=$entry;
    } 
     
    
    return view('admin.apps.kategoriler.form', compact('entry','list','ust_kategori'));
}

public function kaydet($id=0){

    //$this->validate(request(),[
     //   'yemekKategoriAd'=> 'required'
        
   // ]);

   //form.blade.php den gelen isteklerden istediklerimizi dataya aktarıyoruz. Buradaki değerler
   //veritabanındaki sütun değerleri ile aynı
   $data= request()->only('yemek_kategori_ad','yemek_kategori_ust','yemek_kategori_sira');

   if($id>0){
       //form sayfasından gelen id'ye göre gümcelleme işlemi yapıyoruz
       $entry=yemek_kategori::where('id', $id)->firstOrFail();
       $entry->update($data);
       return redirect()->route('kategori')->with('message',"Kategori Başarı ile Güncellendi");
     }
     else {
        //gelen herhangi bir id yok ise veri tabanına ekleme işlemi yapıyor
        yemek_kategori::create(request()->all());
        return redirect()->route('kategori')->with('message',"Kategori Başarı ile Kaydedildi");
     } 
    
   
    
    //dd($request->all());
    
    
}

public function sil($id=0){
   
    yemek_kategori::findorFail($id)->delete();   
    return back()->with('message',$id.' Numaralı Kategori Başarı İle Silindi');
}

}

