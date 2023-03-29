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
        "title" => "Introduction"
    ]);
});

Route::get('/academic', function () {
    return view('academic', [
        "title" => "Academic"
    ]);
});

Route::get('/hobby', function () {
    return view('hobby', [
        "title" => "Hobby"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact"
    ]);
});

Route::get('/organization', function () {
    return view('organization', [
        "title" => "Organization"
    ]);
});
