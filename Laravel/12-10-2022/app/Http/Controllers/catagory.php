<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Http\Requests\categoryValidation;
use App\Models\category;
use Carbon\Carbon;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
class catagory extends Controller
{
    function catagoryPage(){
        $categoryData=category::all();
        return view("admin.catagory.catagory",[
            'categoryData' => $categoryData,
        ]);
    }

    function catagoryInsert(categoryValidation $req){
        // $req -> validate([
        //     'categoryName' => 'required',
        //      'categoryImg' => 'mimes:jpg,bmp,png',
        //     'categoryImg' => 'file|max:5000',
        //     'categoryImg' => 'required',
           

        // ]);


       $category_id= category::insertGetId([
            'catagory_name'=> $req->categoryName,
            'added_by' => Auth::id(),
            'created_at'=> Carbon::now(),
        ]);

        $category_img = $req->categoryImg;
        $extention = $category_img->getClientOriginalExtension();
        // $fileName = $category_id.".".$extention;

        $after_replace = str_replace('','-',$req ->categoryName);
        $fileName = Str::lower($after_replace)."-". rand(1000000,199999).".".$extention;
        Image::make($category_img)->save(public_path('uploads/category/'.$fileName));

        category::find($category_id)->update([
            'catagory_img'=> $fileName,
        ]);





        return back()->with('insertSuccess',"Insert Success");

    }




   function catagoryDelete($categoryId){

    category::find($categoryId)->delete();

    return back()->with('deleteCataSuccess','Delete Success!!');


   }



   function catagory_trash_bin(){
    $trashed = category::onlyTrashed()->get();
    return view("admin.catagory.catagory_trash_bin",[
            'trashed'=>$trashed,
    ]);
   }


   function category_restore($category_trash_id){
       category::onlyTrashed()->find($category_trash_id)->restore();
       return back();
   }



   function category_Parmanant_delete($category_trash_id){

    $cateImg = category::onlyTrashed()->where('id',$category_trash_id)->first()->catagory_img;
    $deleteFrom  =public_path("uploads/category/". $cateImg);

    category::onlyTrashed()->find($category_trash_id)->forceDelete();
    unlink($deleteFrom);
    return back()->with('deleteCataSuccess', 'Parmanant Delete Success!!');
   }










}
