<?php

namespace App\Http\Controllers;

use App\Models\UsersRole;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function group_add(){

        return view('admin.forms.user-group-add');

    }

    public function user_add(){

        return view('admin.forms.user-add');

    }

    public function user_group_registration(){

    $userGroup=UsersRole::create([
        'user_role_id'=>request('kullaniciGrupKodu'),
        'user_role_name'=>request('kullaniciGrupAdi')
    ]);
    return redirect()->route('group-add')->with('message',"Kullanıcı Grubu Başarı ile eklenmiştir.");
    }
}
