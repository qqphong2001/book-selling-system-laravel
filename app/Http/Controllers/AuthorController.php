<?php

namespace App\Http\Controllers;
use App\Models\author;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function add_author(Request $request){

        author::create([
            'name_author' =>  $request->input('name'),
            'desciption_author' => $request->input('description')

        ]);


        return redirect()->route('list_author');

    }

    public function detele_author($id){

        author::find($id)->delete();

        return redirect()->route('list_author');
    }
}
