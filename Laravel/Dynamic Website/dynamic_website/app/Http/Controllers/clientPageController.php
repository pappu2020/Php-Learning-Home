<?php

namespace App\Http\Controllers;

use App\Models\homeSectionModel;
use Illuminate\Http\Request;

class clientPageController extends Controller
{
    function clientPage(){
        $homeAllDataClient = homeSectionModel::all();
        return view("admin.clientPage.clientPage",[
            'homeAllDataClient' => $homeAllDataClient,
        ]);
    }
}
