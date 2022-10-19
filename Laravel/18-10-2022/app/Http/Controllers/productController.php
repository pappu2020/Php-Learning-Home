<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\category;
use App\Models\productModel;
use App\Models\productThumbsnailModel;
use App\Models\subCategoryModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class productController extends Controller
{
    function productPage()
    {
        $categoryAllData = category::all();
        $subCategoryAllData = subCategoryModel::all();
        return view("admin.product.productPage", [
            'categoryAllData' => $categoryAllData,
            'subCategoryAllData' => $subCategoryAllData,
        ]);
    }




    function ProductPageCatESubInfo(Request $req)
    {

        $option =  '<option value="">--Select the Sub-Category--</option>';

        $subCategoriesAll_info = subCategoryModel::where("category_id", $req->category_id)->get();


        foreach ($subCategoriesAll_info as $subCategories_info) {
            $option .= '<option value="' . $subCategories_info->id . '">' . $subCategories_info->subCategoryName . '</option>';
        }

        echo $option;
    }


    function productInsert(Request $req)
    {
        $product_id = productModel::insertGetId([
            'product_name' => $req->product_name,
            'category_id' => $req->category_name,
            'Subcategory_id' => $req->Subcategory_name,
            'product_Price' => $req->product_Price,
            'product_Discount' => $req->product_Discount,
            'After_discount' => ($req->product_Price - ($req->product_Price * ($req->product_Discount / 100))),
            'product_Brand' => $req->product_Brand,
            'product_Short_desp' => $req->product_Short_desp,
            'product_Long_desp' => $req->product_Long_desp,

            'slug' => str_replace(" ","-",Str::lower($req->product_name)).'-'.rand(100000, 1999999),
            'created_by' => Auth::id(),
            'created_at' => Carbon::now(),

        ]);


        $getImage = $req->product_preview_img;

        $extension = $getImage->getClientOriginalExtension();

        $afterName = str_replace(" ", "-", $req->product_name);

        $fileName = Str::lower($afterName).'-'.rand(100000, 1999999).".".$extension;
        Image::make($getImage)->save(public_path("uploads/products/preview/" . $fileName));


        productModel::find($product_id)->update([
            'product_preview_img' => $fileName,
        ]);



        $getThumbImages = $req->product_Thumbnails_img;

        foreach($getThumbImages as $getThumbImage){
            $extensionThumb = $getThumbImage->getClientOriginalExtension();
            $afterNameThumbs = str_replace(" ", "-", $req->product_name);

            $fileNameThumbs = Str::lower($afterNameThumbs) . '-' . rand(100000, 1999999) . "." . $extensionThumb;
            Image::make($getThumbImage)->save(public_path("uploads/products/thumbnails/" . $fileNameThumbs));


            productThumbsnailModel::insert([
                'product_id' =>  $product_id, 
                'thumbs_images' => $fileNameThumbs,
            ]);

        }



        return back()->with("productInsertSuccess","Insert Success");
    }









}
