<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\bookimage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add_product(Request $request ){

        $files = $request->file('thumnails');



        if($request->has('photo')){
            $file = $request->file('photo');
            $request->photo->move(public_path('upload/cover'),$file->getClientOriginalName());
        }

        $createBook =  book::create([
            'isbn'=>$request->input('isbn'),
            'name' => $request->input('name'),
            'image' =>  isset($photoString) ? $photoString : '',
            'title' => $request->input('title'),
            'description' =>$request->input('description'),
            'numPages' => $request->input('numpages'),
            'layout' => $request->input('layout'),
            'publishDate' =>  date("Y-m-d", strtotime($request->input('publishdate'))) ,
            'weight' => $request->input('weight'),
            'translatorName' => $request->input('translatorname'),
            'hSize' => $request->input('hsize'),
            'wSize' => $request->input('wsize'),
            'unitPrice' => $request->input('unitprice'),
            'unitStock' => $request->input('unitstock'),
            'discount' => $request->input('discount'),
            'publisher_id' => $request->input('publisher'),
            'author_id' => $request->input('author'),
            'genre_id' => $request->input('genre'),
            'cover' => 'upload/cover/'.$request->file('photo')->getClientOriginalName() !== null ? '/upload/cover/'.$request->file('photo')->getClientOriginalName() : null,

        ]);





        $lastIdProduct = $createBook->id;

        if($request->has('thumnails'))
        {
            $photoPaths = [];
            foreach($files as $f){
                $photoPath = $f->storeAs('/upload/product',$f->getClientOriginalName());
                $photoPaths[] = $photoPath;
                $photoString = implode(',', $photoPaths);
                $f->move(public_path('upload/product'),$f->getClientOriginalName());

                $photos = explode(",",$photoString);
            };

            foreach($photos as $photo){
                bookimage::create([
                    'image' => isset($photo) ? '/'.$photo : null,
                    'book_id' => $lastIdProduct
                ]);
            }


        }

        return redirect()->route('list_product');
    }

    public function detele_product($id){

        book::find($id)->delete();

        bookimage::where('book_id',$id)->delete();


        return redirect()->route('list_product');

    }

    public function edit_product($id){

        $data= [
           'book' => book::find($id),
            'bookimages' => bookimage::where('book_id',$id)->get()
        ];


        return view('admin/product/edit_product')->with($data);

    }

    public function update_product(Request $request,$id){

        $product = book::find($id);

        if($request->has('photo')){
            $file = $request->file('photo');
            $request->photo->move(public_path('upload/cover/'),$file->getClientOriginalName());
             $product ->cover = '/upload/cover/'.$request->file('photo')->getClientOriginalName() ;
        }

        $product->isbn = $request->input('isbn');
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->numPages = $request->input('numpages');
        $product->layout = $request->input('layout');
        $product->publishDate =  date("Y-m-d", strtotime($request->input('publishdate')))  ;
        $product->weight = $request->input('weight');
        $product->translatorName = $request->input('translatorname');
        $product->hSize = $request->input('hsize');
        $product->wSize = $request->input('wsize');
        $product->unitPrice = $request->input('unitprice');
        $product->unitStock = $request->input('unitstock');
        $product->discount = $request->input('discount');
        $product->publisher_id = $request->input('publisher');
        $product->author_id = $request->input('author');
        $product->genre_id = $request->input('genre');

        $product->update();

        $files = $request->file('thumnails');

        if($request->has('thumnails'))
        {
            $photoPaths = [];
            foreach($files as $f){
                $photoPath = $f->storeAs('/upload/product',$f->getClientOriginalName());
                $photoPaths[] = $photoPath;
                $photoString = implode(',', $photoPaths);
                $f->move(public_path('upload/product'),$f->getClientOriginalName());
                $photos = explode(",",$photoString);
            };


            $count = 0;

            foreach($photos as $photo){
                $count++;
                bookimage::find($request->input('bookimage'.$count))->update([
                    'image' => isset($photo) ? '/'.$photo : null,
                ]);

            }


        }


        return redirect()->route('list_product');




    }
}
?>
