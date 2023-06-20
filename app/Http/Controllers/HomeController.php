<?php

namespace App\Http\Controllers;




use App\Models\Product;

class HomeController extends Controller  {



    public function index() {

        $objects = Product::inRandomOrder()->take(4)->get() // returns Collection
        ->sortBy('id');

        return view('front.home', [
            'objects' => $objects
        ]);
    }

}
