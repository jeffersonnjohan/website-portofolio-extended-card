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
        "headline" => "Hai, salam kenal!",
        "headlineDescription" => "Anda yang datang ke sini pasti bukanlah karena iseng belaka. Selamat Anda sudah datang ke tempat yang benar untuk mengenal saya lebih dalam. Niscaya hidup Anda akan lebih bahagia."
    ]);
});

// Route::get('/academic', function () {
//     return view('academicSD', [
//         "title" => "Academic",
//         "headline" => "Riwayat Akademik-ku",
//         "headlineDescription" => "Tak kenal maka tak sayang, Anda harus mengetahui latar belakang saya sebelum di PPTI 12 BCA. Tapi setelah kenal, jangan malah jadi sayang ya hehehe"
//     ]);
// });

Route::prefix('/academic')->group(function(){
    Route::get('/sd', function(){
        return view('academicSD', [
            "title" => "Academic SD",
            "headline" => "Riwayat Akademik-ku",
            "headlineDescription" => "Tak kenal maka tak sayang, Anda harus mengetahui latar belakang saya sebelum di PPTI 12 BCA. Tapi setelah kenal, jangan malah jadi sayang ya hehehe",
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

Route::get('/hobby', function () {
    return view('hobby', [
        "title" => "Hobby",
        "headline" => "Hello World!",
        "headlineDescription" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut accusamus tempore aspernatur nihil eius labore distinctio sit amet facilis. Nihil corrupti nemo qui id excepturi dolorum veniam deleniti libero autem."
    ]);
});

Route::get('/project', function () {
    return view('project', [
        "title" => "Project",
        "headline" => "Hello World!",
        "headlineDescription" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut accusamus tempore aspernatur nihil eius labore distinctio sit amet facilis. Nihil corrupti nemo qui id excepturi dolorum veniam deleniti libero autem."
    ]);
});

Route::get('/organization', function () {
    return view('organization', [
        "title" => "Organization",
        "headline" => "Hello World!",
        "headlineDescription" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut accusamus tempore aspernatur nihil eius labore distinctio sit amet facilis. Nihil corrupti nemo qui id excepturi dolorum veniam deleniti libero autem."
    ]);
});

// Fallback for unrecognize link
Route::fallback(function () {
    return redirect('/'); 
});
