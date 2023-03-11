<?php

namespace App\Http\Controllers;

class Homcontroller extends Controller{


    public function index(){


        return view('user/home/index')->with('title','Trang chủ');


    }

}

?>
