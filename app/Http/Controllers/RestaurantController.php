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
            'name' => 'Bakmie Sin Chiau Lok Palembang',
            'address' => 'Jl. Mesjid Lama No.144, 17 Ilir, Kec. Ilir Tim. I, Kota Palembang, Sumatera Selatan 30122',
            'image' => 'terangbulan.jpg',
            'quality' => 'gold'
        ],
        [
            'id' => 3,
            'name' => 'Bakmie Aloy Palembang',
            'address' => 'Jl. Dempo Luar No.410A, 15 Ilir, Kec. Ilir Tim. I, Kota Palembang, Sumatera Selatan 30111',
            'image' => 'aloi.jpg',
            'quality' => 'silver'
        ],
        [
            'id' => 4,
            'name' => 'Pempek Vico Palembang',
            'address' => 'Jl. Jend. Sudirman No.,.122, Sekip Jaya, Kec. Kemuning, Kota Palembang, Sumatera Selatan 30128',
            'image' => 'vico.jpg',
            'quality' => 'bronze',
        ],
        [
            'id' => 5,
            'name' => 'Bakmie Ferry Palembang',
            'address' => 'Jl. Bangau No.165c, 9 Ilir, Kec. Ilir Tim. II, Kota Palembang, Sumatera Selatan 30114',
            'image' => 'ferry.jpg',
            'quality' => 'bronze',
        ],
    ];

    public function index(){
        return view('restaurant', [
            "title" => "Restaurant",
            "headline" => "My Favourite Restaurant at Palembang",
            "headlineDescription" => "Food is half of my life especially Palembang food. You have to try this, or you will live in regret forever",
            "image" => "bg6.jpg",
            "restaurants" => $this->restaurants,
        ]);
    }

    public function single($id){

        $res = [];
        foreach($this->restaurants as $restaurant){
            if($restaurant["id"] == $id){
                $res = $restaurant;
                break;
            }
        }
        return view('singleRestaurant', [
            "title" => $res["name"],
            "headline" => "My Favourite Restaurant at Palembang",
            "headlineDescription" => "Food is half of my life especially Palembang food. You have to try this, or you will live in regret forever",
            "image" => "bg6.jpg",
            "restaurant" => $res,
        ]);
    }
}
