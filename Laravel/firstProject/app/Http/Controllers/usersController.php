<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class usersController extends Controller
{
    function userViewFun(){
        $userData = User::where("id","!=",Auth::id())->get();
        $userDataCount = User::count();
        return view("admin.user.userView",compact("userData", "userDataCount"));
        
    }
}
