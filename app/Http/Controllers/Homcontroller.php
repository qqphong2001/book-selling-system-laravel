<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\genre;

class Homcontroller extends Controller{


    public function index(){

        $title = "Trang chủ";
        $genres = genre::get();
        $product_hots = book::orderByDesc('view')->take(10)->get();
        $product_discounts = book::where('discount','>',1)->get();




        return view('user/home/index',compact('genres','title','product_hots','product_discounts'));


    }

}

?>
