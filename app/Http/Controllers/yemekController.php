<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class yemekController extends Controller
{
    public function index(){
        return view('admin.apps.ecommerce.yemek');
        

    }
}
