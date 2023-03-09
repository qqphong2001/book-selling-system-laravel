<?php

namespace App\Http\Controllers;

use App\Models\publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function add_publisher(Request $request ){


        publisher::create([
            'name' => $request->input('name')
        ]);



        return redirect()->route('list_publisher');
    }

    public function detele_publisher($id){

        publisher::find($id)->delete();

        return redirect()->route('list_publisher');

    }
}
