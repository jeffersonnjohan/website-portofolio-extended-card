<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function index(){
        return view('project', [
            "title" => "Project",
            "headline" => "My Projects at Uni Life",
            "headlineDescription" => "Doing the projects is my passion. Even though it was hard, but after finish it i feel satisfied with the result. Collaboration with great team will definitely give the best result.",
            "image" => "bg5.jpg"
        ]);
    }
}
