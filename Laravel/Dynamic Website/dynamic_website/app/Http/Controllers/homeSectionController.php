<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\homeSectionModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class homeSectionController extends Controller
{
    function homeSectionpage()
    {
        $homeAllData = homeSectionModel::all();
        return view("admin.homeSection.homeSectionpage", [
            'homeAllData' => $homeAllData,
        ]);
    }

    function homeInsert(Request $req)
    {
        $req->validate([
            'home_name' => 'required',
            'home_description' => 'required',

            'home_image' => 'file|max:5000',
            'home_image' => 'required|mimes:jpg,bmp,png',
        ]);


        $homeCountData = homeSectionModel::count();

        if ($homeCountData < 1) {
            $homeSecId = homeSectionModel::insertGetId([
                'home_name' => $req->home_name,
                'home_description' => $req->home_description,
                'created_at' => Carbon::now(),
            ]);

            $homeSection_img = $req->home_image;
            $extention_home = $homeSection_img->getClientOriginalExtension();


            $after_replace_home = str_replace('', '-', $req->home_name);
            $fileName = Str::lower($after_replace_home) . "-" . rand(1000000, 199999) . "." . $extention_home;
            Image::make($homeSection_img)->save(public_path('uploads/homeSection/' . $fileName));

            homeSectionModel::find($homeSecId)->update([
                'home_image' => $fileName,
            ]);





            return back()->with('HomeinsertSuccess', "Insert Success");
        } else {
            return back()->with("homeInsertFail", "One user data already insert for home page!!");
        }
    }
}
