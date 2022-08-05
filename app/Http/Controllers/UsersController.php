<?php

namespace App\Http\Controllers;

use App\Models\UsersRole;
use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function group_add(){

        return view('admin.forms.user-group-add');

    }

    public function user_add(){

        $userGroups=UsersRole::orderBy('user_role_id')->pluck('user_role_name','user_role_id');
        return view('admin.forms.user-add',compact('userGroups'));

    }

    public function user_group_registration(){

    $userGroup=UsersRole::create([
        'user_role_id'=>request('kullaniciGrupKodu'),
        'user_role_name'=>request('kullaniciGrupAdi')
    ]);
    return redirect()->route('group_add')->with('message',"Kullanıcı Grubu Başarı ile eklenmiştir.");
    }

    public function user_registration(){

        $userGroup=Users::create([
            'user_name'=>request('userName'),
            'user_pass'=>request('userPass'),
            'user_email'=>request('userEmail'),
            'user_role_id'=>request('userGroupId')
        ]);
        return redirect()->route('user-add')->with('message',"Kullanıcı Başarı ile eklenmiştir.");
        }
}
