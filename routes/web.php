<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('introduction', [
        "title" => "Introduction",
        "headline" => "Hi, nice to have you here!",
        "headlineDescription" => "You are here isn't just a coincidence. Congratulation, you have privilege here in the right place to know me much deeper than everybody. Trust me, you life will be happier now and forever",
        "image" => "bg1.jpg"
    ]);
});

Route::prefix('/academic')->group(function(){
    Route::get('/sd', function(){
        return view('academicSD', [
            "title" => "Academic SD",
            "headline" => "My Academic Journey",
            "headlineDescription" => "I will tell you my story from primary school until now. Thankyou for my friends, teachers, and all people who are in my life journey. Without you all guys, i cannot stand here like now",
            "active" => "SD",
            "image" => "bg2.jpg"
        ]);
    });
    Route::get('/smp', function(){
        return view('academicSMP', [
            "title" => "Academic SMP",
            "headline" => "My Academic Journey",
            "headlineDescription" => "I will tell you my story from primary school until now. Thankyou for my friends, teachers, and all people who are in my life journey. Without you all guys, i cannot stand here like now",
            "active" => "SMP",
            "image" => "bg2.jpg"
        ]);
    });
    Route::get('/sma', function(){
        return view('academicSMA', [
            "title" => "Academic SMA",
            "headline" => "My Academic Journey",
            "headlineDescription" => "I will tell you my story from primary school until now. Thankyou for my friends, teachers, and all people who are in my life journey. Without you all guys, i cannot stand here like now",
            "active" => "SMA",
            "image" => "bg2.jpg"
        ]);
    });
    Route::get('/kuliah', function(){
        return view('academicKuliah', [
            "title" => "Academic Kuliah",
            "headline" => "My Academic Journey",
            "headlineDescription" => "I will tell you my story from primary school until now. Thankyou for my friends, teachers, and all people who are in my life journey. Without you all guys, i cannot stand here like now",
            "active" => "Kuliah",
            "image" => "bg2.jpg"
        ]);
    });
    Route::get('/', function(){
        return view('academicSD', [
            "title" => "Academic SD",
            "headline" => "My Academic Journey",
            "headlineDescription" => "I will tell you my story from primary school until now. Thankyou for my friends, teachers, and all people who are in my life journey. Without you all guys, i cannot stand here like now",
            "active" => "SD",
            "image" => "bg2.jpg"
        ]);
    });
});

Route::prefix('/organization')->group(function(){
    Route::get('/bgc', function(){
        return view('organizationBGC', [
            "title" => "BGC",
            "headline" => "Organization dan Volunteer",
            "headlineDescription" => "Life doesn't always need technical skills. In some occassions, i join organization to practice about soft skills that can help me soon in future",
            "active" => "BGC",
            "image" => "bg3.jpg"
        ]);
    });
    Route::get('/signal', function(){
        return view('organizationSignal', [
            "title" => "SIGNAL",
            "headline" => "Organization dan Volunteer",
            "headlineDescription" => "Life doesn't always need technical skills. In some occassions, i join organization to practice about soft skills that can help me soon in future",
            "active" => "SIGNAL",
            "image" => "bg3.jpg"
        ]);
    });
    Route::get('/spark', function(){
        return view('organizationSpark', [
            "title" => "SPARK",
            "headline" => "Organization dan Volunteer",
            "headlineDescription" => "Life doesn't always need technical skills. In some occassions, i join organization to practice about soft skills that can help me soon in future",
            "active" => "SPARK",
            "image" => "bg3.jpg"
        ]);
    });
    Route::get('/yap', function(){
        return view('organizationYAP', [
            "title" => "You Are Precious",
            "headline" => "Organization dan Volunteer",
            "headlineDescription" => "Life doesn't always need technical skills. In some occassions, i join organization to practice about soft skills that can help me soon in future",
            "active" => "YAP",
            "image" => "bg3.jpg"
        ]);
    });
    Route::get('/', function(){
        return view('organizationBGC', [
            "title" => "BGC",
            "headline" => "Organization dan Volunteer",
            "headlineDescription" => "Life doesn't always need technical skills. In some occassions, i join organization to practice about soft skills that can help me soon in future",
            "active" => "BGC",
            "image" => "bg3.jpg"
        ]);
    });
});

Route::get('/hobby', function () {
    return view('hobby', [
        "title" => "Hobby",
        "headline" => "My Favourite Activities",
        "headlineDescription" => "During my leisure time, i often do something which can make me happy. Maintaining hobby is important to keep our soul and body alive perfectly.",
        "image" => "bg4.jpg"
    ]);
});

Route::get('/project', function () {
    return view('project', [
        "title" => "Project",
        "headline" => "My Projects at Uni Life",
        "headlineDescription" => "Doing the projects is my passion. Even though it was hard, but after finish it i feel satisfied with the result. Collaboration with great team will definitely give the best result.",
        "image" => "bg5.jpg"
    ]);
});

// Fallback for unrecognize link
Route::fallback(function () {
    return redirect('/'); 
});
