<?php

namespace App\Http\Controllers;

use App\Models\genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function add_genre(Request $request ){


        if($request->has('photos'))
        {
            $files = $request->file('photos');

            $photoPaths = [];

            foreach($files as $f){
                $photoPath = $f->storeAs('/upload/genre',$f->getClientOriginalName());
                $photoPaths[] = $photoPath;
                $photoString = implode(',', $photoPaths);
                $f->move(public_path('upload/genre'),$f->getClientOriginalName());
            }
        }

        genre::create([
            'name_genre' => $request->input('name'),
            'image' =>  isset($photoString) ? '/'.$photoString : '',

        ]);



        return redirect()->route('list_genre');
    }

    public function detele_genre($id){

        genre::find($id)->delete();

        return redirect()->route('list_genre');

    }
}
