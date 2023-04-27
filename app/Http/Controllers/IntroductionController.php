<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroductionController extends Controller
{
    //
    public function index(){
        return view('introduction', [
            "title" => "Introduction",
            "headline" => "Hi, nice to have you here!",
            "headlineDescription" => "You are here isn't just a coincidence. Congratulation, you have privilege here in the right place to know me much deeper than everybody. Trust me, you life will be happier now and forever",
            "image" => "bg1.jpg"
        ]);
    }
}
