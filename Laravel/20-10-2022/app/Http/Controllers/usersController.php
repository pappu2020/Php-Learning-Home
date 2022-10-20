<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Image;

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

    function userDeleteFunction($user_id){

        User::find($user_id)->delete();
        return back();

    }

    function profilePage(){
        return view("admin.user.profile");
    }

    function profileNameUpdate(Request $req){

        $req->validate([
            'name' => 'required',
            
        ]);
       
        
        
        User::find(Auth::id())->update([
          'name' => $req -> name,
        ]);

        return back()->with('name_update_success', 'Name Update success!!');

    }

    function profilePasswordUpdate(Request $req){

        $req->validate([
            'old_pass'=>'required',

            
            'password' => Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols(),
            'password'=> 'required|confirmed',
           
            'password_confirmation' => 'required',
         
            
            
            
           
            
           

           
        ],);


        if(Hash::check($req->old_pass,Auth::User()->password)){
           User::find(Auth::id())->update([
              "password" => bcrypt($req -> password),
           ]);
            return back()->with('pass_update_success', 'Password Update success!!');
        }
       else{
           return back()->with('wrong_pass','Password does not matched!!');
       }
    }


    function profilePicChange(Request $req){

        $req -> validate([
            'profile_img' => 'required|file|max:5000',
            'profile_img' => 'mimes:jpg,jpeg,png,gif',
        ]);

        $upload_img = $req->profile_img;

        if(Auth::user()-> image== null){
            $extension = $upload_img -> getClientOriginalExtension();
            $fileName = Auth::id().'.'. $extension;
            
         

            Image::make($upload_img)->resize(300,200)->save(public_path('uploads/user/'.$fileName));

            User::find(Auth::id())->update([
                'image'=> $fileName,
            ]);

            return back();
        }

        else{
            $delete_pic = public_path('uploads/user/'.Auth::user()->image);
            unlink($delete_pic);
            $extension = $upload_img->getClientOriginalExtension();
            $fileName = Auth::id() . '.' . $extension;



            Image::make($upload_img)->resize(300, 200)->save(public_path('uploads/user/' . $fileName));

            User::find(Auth::id())->update([
                'image' => $fileName,
            ]);

            return back();
        }

    }












}
