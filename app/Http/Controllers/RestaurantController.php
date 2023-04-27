<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    //
    public $restaurants = [
        [
            'id' => 1,
            'name' => 'Lomie Taksam Palembang',
            'address' => 'Jl. Letda Abdul Rozak No.23, Duku, Kec. Ilir Tim. II, Kota Palembang, Sumatera Selatan 30114',
            'image' => 'lomie.jpg',
            'quality' => 'gold'
        ],
        [
            'id' => 2,
            'name' => 'Bakmie Aloy Palembang',
            'address' => 'Jl. Dempo Luar No.410A, 15 Ilir, Kec. Ilir Tim. I, Kota Palembang, Sumatera Selatan 30111',
            'image' => 'aloi.jpg',
            'quality' => 'silver'
        ],
        [
            'id' => 3,
            'name' => 'Pempek Vico Palembang',
            'address' => 'Jl. Letda Abdul Rozak No.23, Duku, Kec. Ilir Tim. II, Kota Palembang, Sumatera Selatan 30114',
            'image' => 'lomie.jpg',
            'quality' => 'bronze',
        ],
    ];

    public function index(){
        global $restaurants;

        return view('restaurant', [
            "title" => "Restaurant",
            "headline" => "My Favourite Restaurant at Palembang",
            "headlineDescription" => "Food is half of my life especially Palembang food. You have to try this, or you will live in regret forever",
            "image" => "bg6.jpg",
            "restaurants" => $restaurants,
        ]);
    }
}
