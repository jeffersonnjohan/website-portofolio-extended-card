<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    //
    public function bgc(){
        return view('organizationBGC', [
            "title" => "BGC",
            "headline" => "Organization dan Volunteer",
            "headlineDescription" => "Life doesn't always need technical skills. In some occassions, i join organization to practice about soft skills that can help me soon in future",
            "active" => "BGC",
            "image" => "bg3.jpg"
        ]);
    }
    public function signal(){
        return view('organizationSignal', [
            "title" => "SIGNAL",
            "headline" => "Organization dan Volunteer",
            "headlineDescription" => "Life doesn't always need technical skills. In some occassions, i join organization to practice about soft skills that can help me soon in future",
            "active" => "SIGNAL",
            "image" => "bg3.jpg"
        ]);
    }
    public function spark(){
        return view('organizationSpark', [
            "title" => "SPARK",
            "headline" => "Organization dan Volunteer",
            "headlineDescription" => "Life doesn't always need technical skills. In some occassions, i join organization to practice about soft skills that can help me soon in future",
            "active" => "SPARK",
            "image" => "bg3.jpg"
        ]);
    }
    public function yap(){
        return view('organizationYAP', [
            "title" => "You Are Precious",
            "headline" => "Organization dan Volunteer",
            "headlineDescription" => "Life doesn't always need technical skills. In some occassions, i join organization to practice about soft skills that can help me soon in future",
            "active" => "YAP",
            "image" => "bg3.jpg"
        ]);
    }
}
