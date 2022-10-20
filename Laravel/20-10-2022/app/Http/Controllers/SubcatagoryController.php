<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\category;
use App\Models\subCategoryModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class SubcatagoryController extends Controller
{
    function SubcatagoryPage()
    {
        $categoryData = category::all();

        $subCategoryData = subCategoryModel::all();
        return view("admin.subCategory.SubcatagoryPage", [
            'categoryData' => $categoryData,
            'subCategoryData' => $subCategoryData,
        ]);
    }


    function SubcatagoryInsert(Request $req)
    {

        $req->validate([
            'subCategoryName' => 'required',
        ]);


       $subCataId= subCategoryModel::insertGetId([
            'category_id' => $req->subCateOption,
            'subCategoryName' => $req->subCategoryName,
            'added_by' => Auth::id(),
            'created_at' => Carbon::now(),

        ]);


        $getPhoto = $req->subCategoryImg;
        $subImageExtension = $getPhoto->getClientOriginalExtension();

        $afterName = str_replace("","-", $req->subCategoryName);
        $fileName = str::lower($afterName."-".rand(100000,199999).".".$subImageExtension);

        Image::make($getPhoto)->save(public_path("uploads/subCategory/".$fileName));

        subCategoryModel::find($subCataId)->update([
            'subCategoryImg' =>$fileName,
        ]);

        return back()->with('SubCategoryinsertSuccess', "Insert Success");
    }
}
