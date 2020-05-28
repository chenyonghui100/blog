<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function login(Request $request){
        $userInfo = User::where('email',$request->input('email'))->first();
        if(Hash::check($request->input('password'),$userInfo->password)){

            return ['code'=>200,'msg'=>'密码正确'];
        }else{
            var_dump(Hash::make('123456.@'));
            return ['code'=>300,'msg'=>'密码错误'];
        }

    }
}
