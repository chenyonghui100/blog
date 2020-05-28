<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAddressRequest;
use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Http\Request;

class UserAddressController extends Controller
{

    public function update(UserAddressRequest $request){
        /*$a = $address->all();
        return $a;*/
        User::where('id',2)->update(['name'=>'chenyonghui']);
    }
}
