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



   function catagoryEditPage($categoryId){

      $category_info  = category::find($categoryId);
      return view("admin.catagory.catagoryEditPage",[
            'category_info' => $category_info,
      ]);
   }



   function catagotyUpdate(Request $req){

      $req->validate([
            'categoryName' => 'required',
      ]);

    
    if($req->categoryImg == null){
            category::find($req->category_id_hidden)->update([
                'catagory_name' => $req->categoryName,
                'added_by' => Auth::id(),
                'updated_at' => Carbon::now(),

            ]);
            
    }


    else{
        $del_cate_img_info = category::where("id", $req->category_id_hidden)->first()->catagory_img;
        $delete_from = public_path("uploads/category/".$del_cate_img_info);
        unlink($delete_from);

            $category_img_updated = $req->categoryImg;
            $extention = $category_img_updated->getClientOriginalExtension();
      

            
            $fileName = Str::lower($req->categoryName) . "-" . rand(1000000, 199999) . "." . $extention;
            Image::make($category_img_updated)->save(public_path('uploads/category/' . $fileName));

            category::find($req->category_id_hidden)->update(['
                catagory_name' => $req->categoryName,
                'added_by' => Auth::id(),
                'updated_at' => Carbon::now(),
                'catagory_img' => $fileName,

            ]);

    }


    return back()->with("categoryUpdateSuccess","Update Success!!!");
    
    
    
   }














   //category Trash Section

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
