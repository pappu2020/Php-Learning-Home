<?php

namespace App\Http\Controllers;

use App\Models\addSizeModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class addSizeController extends Controller
{
    function addSizePage(){
        $sizeAllInfo = addSizeModel::all();
        return view("admin.inventory.addSizePage",[
            'sizeAllInfo' => $sizeAllInfo,
        ]);
    }


    function sizeInsert(Request $req){
        $req->validate([
            'addSize' => 'required',
        ]);

        addSizeModel::insert([
            'SizeName'=> $req->addSize,
            'created_at'=> Carbon::now(),
            'created_by' => Auth::id(),
        ]);

        return back()->with("insertSizeSuccess","Insert success!!");
    }
}
