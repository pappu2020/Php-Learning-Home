<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class usersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    function userViewFun(){
        $userData = User::where("id","!=",Auth::id())->get();
        $userDataCount = User::count();
        return view("admin.user.userView",compact("userData", "userDataCount"));
        
    }

    function userDeleteFun($user_id){
       User::find($user_id)->delete();
       
       return back();
    }
}
