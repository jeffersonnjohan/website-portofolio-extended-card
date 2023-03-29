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

Route::get('/academic', function () {
    return view('academic', [
        "title" => "Academic",
        "headline" => "Hello World!",
        "headlineDescription" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut accusamus tempore aspernatur nihil eius labore distinctio sit amet facilis. Nihil corrupti nemo qui id excepturi dolorum veniam deleniti libero autem."
    ]);
});

Route::get('/hobby', function () {
    return view('hobby', [
        "title" => "Hobby",
        "headline" => "Hello World!",
        "headlineDescription" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut accusamus tempore aspernatur nihil eius labore distinctio sit amet facilis. Nihil corrupti nemo qui id excepturi dolorum veniam deleniti libero autem."
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
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
