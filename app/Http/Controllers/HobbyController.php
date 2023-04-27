<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbyController extends Controller
{
    //
    public function index(){
        return view('hobby', [
            "title" => "Hobby",
            "headline" => "My Favourite Activities",
            "headlineDescription" => "During my leisure time, i often do something which can make me happy. Maintaining hobby is important to keep our soul and body alive perfectly.",
            "image" => "bg4.jpg"
        ]);
    }
}
