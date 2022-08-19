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
        $yemek=yemek::find($id);
        //echo "sdsdfsdf";
        //echo $yemek->yemek_resmi;
        //Cart::add($id, $yemek->yemek_ad, 1, $yemek->yemek_fiyat);
        Cart::add(['id' => $id, 'name' => $yemek->yemek_ad, 'qty' => 1, 'price' => $yemek->yemek_fiyat, 'weight' => 0, 'options' => ['yemek_resmi' => $yemek->yemek_resmi]]);

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
        //return redirect()->route('sepet');


    }
}
