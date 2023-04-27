<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademicController extends Controller
{
    //
    public function sd(){
        return view('academicSD', [
            "title" => "Academic SD",
            "headline" => "My Academic Journey",
            "headlineDescription" => "I will tell you my story from primary school until now. Thankyou for my friends, teachers, and all people who are in my life journey. Without you all guys, i cannot stand here like now",
            "active" => "SD",
            "image" => "bg2.jpg"
        ]);
    }
    public function smp(){
        return view('academicSMP', [
            "title" => "Academic SMP",
            "headline" => "My Academic Journey",
            "headlineDescription" => "I will tell you my story from primary school until now. Thankyou for my friends, teachers, and all people who are in my life journey. Without you all guys, i cannot stand here like now",
            "active" => "SMP",
            "image" => "bg2.jpg"
        ]);
    }
    public function sma(){
        return view('academicSMA', [
            "title" => "Academic SMA",
            "headline" => "My Academic Journey",
            "headlineDescription" => "I will tell you my story from primary school until now. Thankyou for my friends, teachers, and all people who are in my life journey. Without you all guys, i cannot stand here like now",
            "active" => "SMA",
            "image" => "bg2.jpg"
        ]);
    }
    public function kuliah(){
        return view('academicKuliah', [
            "title" => "Academic Kuliah",
            "headline" => "My Academic Journey",
            "headlineDescription" => "I will tell you my story from primary school until now. Thankyou for my friends, teachers, and all people who are in my life journey. Without you all guys, i cannot stand here like now",
            "active" => "Kuliah",
            "image" => "bg2.jpg"
        ]);
    }
}
