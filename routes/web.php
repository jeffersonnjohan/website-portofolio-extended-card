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
        "headlineDescription" => "You are here isn't just a coincidence. Congratulation, you have privilege here in the right place to know me much deeper than everybody. Trust me, you life will be happier now and forever"
    ]);
});

Route::prefix('/academic')->group(function(){
    Route::get('/sd', function(){
        return view('academicSD', [
            "title" => "Academic SD",
            "headline" => "My Academic Journey",
            "headlineDescription" => "Tak kenal maka tak sayang, Anda harus mengetahui latar belakang saya sebelum di PPTI 12 BCA. Tapi setelah kenal, jangan malah jadi sayang ya hehehe",
            "headlineDescription" => "I will tell you my story from primary school until now. Thankyou for my friends, teachers, and all people who are in my life journey. Without you all guys, i cannot stand here like now",
            "active" => "SD"
        ]);
    });
    Route::get('/smp', function(){
        return view('academicSMP', [
            "title" => "Academic SMP",
            "headline" => "Riwayat Akademik-ku",
            "headlineDescription" => "Tak kenal maka tak sayang, Anda harus mengetahui latar belakang saya sebelum di PPTI 12 BCA. Tapi setelah kenal, jangan malah jadi sayang ya hehehe",
            "active" => "SMP"
        ]);
    });
    Route::get('/sma', function(){
        return view('academicSMA', [
            "title" => "Academic SMA",
            "headline" => "Riwayat Akademik-ku",
            "headlineDescription" => "Tak kenal maka tak sayang, Anda harus mengetahui latar belakang saya sebelum di PPTI 12 BCA. Tapi setelah kenal, jangan malah jadi sayang ya hehehe",
            "active" => "SMA"
        ]);
    });
    Route::get('/kuliah', function(){
        return view('academicKuliah', [
            "title" => "Academic Kuliah",
            "headline" => "Riwayat Akademik-ku",
            "headlineDescription" => "Tak kenal maka tak sayang, Anda harus mengetahui latar belakang saya sebelum di PPTI 12 BCA. Tapi setelah kenal, jangan malah jadi sayang ya hehehe",
            "active" => "Kuliah"
        ]);
    });
    Route::get('/', function(){
        return view('academicSD', [
            "title" => "Academic SD",
            "headline" => "Riwayat Akademik-ku",
            "headlineDescription" => "Tak kenal maka tak sayang, Anda harus mengetahui latar belakang saya sebelum di PPTI 12 BCA. Tapi setelah kenal, jangan malah jadi sayang ya hehehe",
            "active" => "SD"
        ]);
    });
});

Route::prefix('/organization')->group(function(){
    Route::get('/bgc', function(){
        return view('organizationBGC', [
            "title" => "BGC",
            "headline" => "Organisasi dan Sukarelawan",
            "headlineDescription" => "Hidup tidak selalu tentang belajar skill teknis. Pada beberapa kesempatan saya mengikuti organisasi untuk berlatih soft skill yang akan berguna kelak di masa depan.",
            "active" => "BGC"
        ]);
    });
    Route::get('/signal', function(){
        return view('organizationSignal', [
            "title" => "SIGNAL",
            "headline" => "Organisasi dan Sukarelawan",
            "headlineDescription" => "Hidup tidak selalu tentang belajar skill teknis. Pada beberapa kesempatan saya mengikuti organisasi untuk berlatih soft skill yang akan berguna kelak di masa depan.",
            "active" => "SIGNAL"
        ]);
    });
    Route::get('/spark', function(){
        return view('organizationSpark', [
            "title" => "SPARK",
            "headline" => "Organisasi dan Sukarelawan",
            "headlineDescription" => "Hidup tidak selalu tentang belajar skill teknis. Pada beberapa kesempatan saya mengikuti organisasi untuk berlatih soft skill yang akan berguna kelak di masa depan.",
            "active" => "SPARK"
        ]);
    });
    Route::get('/yap', function(){
        return view('organizationYAP', [
            "title" => "You Are Precious",
            "headline" => "Organisasi dan Sukarelawan",
            "headlineDescription" => "Hidup tidak selalu tentang belajar skill teknis. Pada beberapa kesempatan saya mengikuti organisasi untuk berlatih soft skill yang akan berguna kelak di masa depan.",
            "active" => "YAP"
        ]);
    });
    Route::get('/', function(){
        return view('organizationBGC', [
            "title" => "BGC",
            "headline" => "Organisasi dan Sukarelawan",
            "headlineDescription" => "Hidup tidak selalu tentang belajar skill teknis. Pada beberapa kesempatan saya mengikuti organisasi untuk berlatih soft skill yang akan berguna kelak di masa depan.",
            "active" => "BGC"
        ]);
    });
});

Route::get('/hobby', function () {
    return view('hobby', [
        "title" => "Hobby",
        "headline" => "Aktivitas Kesukaan-ku",
        "headlineDescription" => "Jikalau kita memiliki kesamaan hobi, maka kita bisa dikatakan cocok. Hobi itu penting, untuk menjaga api kehidupan dan memberikan kebahagiaan di dalam jiwa"
    ]);
});

Route::get('/project', function () {
    return view('project', [
        "title" => "Project",
        "headline" => "My Projects at Uni Life",
        "headlineDescription" => "Doing the projects is my passion. Even though it was hard, but after finish it i feel satisfied with the result. Collaboration with great team will definitely give the best result."
    ]);
});

// Fallback for unrecognize link
Route::fallback(function () {
    return redirect('/'); 
});
