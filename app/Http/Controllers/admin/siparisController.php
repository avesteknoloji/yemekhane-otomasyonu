<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\yemek;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class siparisController extends Controller
{
    public function index(){
       return view('admin.apps.ecommerce.cart');
      // echo $_GET['yemekID'];
      // return "çalıştı";
    }

    public function ekle(){
       
        $id= $_GET['yemekID'];
        $tarih=$_GET['siparisTarihi'];
        $yemek=yemek::find($id);
        Cart::add([
            'id' => $id, 
            'name' => $yemek->yemek_ad, 
            'qty' => 1, 'price' => $yemek->yemek_fiyat, 
            'weight' => 0, 
            'options' => ['yemek_resmi' => $yemek->yemek_resmi, 'siparis_tarihi'=>$tarih]]);

        //return view('admin.apps.ecommerce.cart',compact('yemek'));
        
    }

    public function kaldir($rowid){   
        Cart::remove($rowid);
        return redirect()->route('sepet');
    }

    public function guncelle(){
             
        $qty=$_GET['yemekQty'];
        $rowid=$_GET['rowId'];
       // echo $qty;
      /*   foreach (Cart::content() as $item) {
            echo $item->rowId."->".$item->qty."<br>";
            
           
        } */

        Cart::update($rowid, $qty);
        foreach (Cart::content() as $item) {
            if ($rowid==$item->rowId) {$subtotal=$item->subtotal;}
            
            
           
        } 
        
        return response()->json([
            'qty'=>''.$subtotal.'',
            'total'=>''.Cart::subtotal().''
        ]);


    }
}
