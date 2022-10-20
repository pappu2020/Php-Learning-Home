<?php

namespace App\Http\Controllers;

use App\Models\addColorModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class addColorController extends Controller
{
    function addColorPage()
    {
        $colorAllInfo = addColorModel::all();
        return view("admin.inventory.addColorPage", [
            'colorAllInfo' => $colorAllInfo,
        ]);
    }


    function colorInsert(Request $req)
    {
     

        addColorModel::insert([
            'ColorName' => $req->addColor,
            'ColorCode' => $req->colorCode,
            'created_at' => Carbon::now(),
            'created_by' => Auth::id(),
        ]);

        return back()->with("insertColorSuccess", "Insert success!!");
    }
}
