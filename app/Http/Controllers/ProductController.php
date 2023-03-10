<?php

namespace App\Http\Controllers;

use App\Models\author;
use App\Models\book;
use App\Models\bookimage;
use App\Models\genre;
use App\Models\publisher;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $title = "Trang sản phẩm";
        $productAll = book::get();


        return view('user/product/index',compact('title','productAll'));
    }

    public function sortBy(Request $request){

        $title = "Trang sản phẩm";
        $productAll = book::orderByDesc($request->value)->get();


        return response()->json([
            'status' => 'success',
            'productHtml' => view('user/product/index', compact('productAll'))->render()
        ]);
    }


    public function search(Request $request){
        $title = "Trang sản phẩm";

        $productAll = book::where('title','like','%'.$request->input('search').'%')->get();



        return view('user/product/index',compact('title','productAll'));
    }



    public function detail_product($id){

        $title = "Chi tiết sản phẩm";
        $product = book::join('author','author.id','=','book.author_id')
        ->join('publisher','publisher.id','=','book.author_id')
        ->join('genre','genre.id','=','book.genre_id')
        ->where('book.id',$id)
        ->first();

        $product_images = bookimage::where('book_id',$id)->get();
        $product_genres = book::where('genre_id',$product->id)->where('id','!=',$id)->get() ;

        $product_view = book::find($id);
        $product_view->view = $product_view->view + 1;
        $product_view->update();

        return view('user/product/detail_product',compact('title','product','product_images','product_genres'));
    }

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

        $book = book::find($id);
        $data= [
             'book' => $book,
            'bookimages' => bookimage::where('book_id',$id)->get(),
            'authors' => author::get(),
            'publishers' => publisher::get(),
            'genres' => genre::get(),


            'book_author' => author::join('book','book.author_id','=','author.id')->where('book.id',$id)->first(),
            'book_publisher'=>publisher::join('book','book.publisher_id','=','publisher.id')->where('book.id',$id)->first(),
            'book_genre'=>genre::join('book','book.genre_id','=','genre.id')->where('book.id',$id)->first(),

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

    public function product_hot(){

        $title = "Sản phẩm nổi bật";
        $productAll = book::orderByDesc('view')->get();

        return view('user/product_hot/index',compact('title','productAll'));
    }

    public function product_discount(){
        $title = "Sản phẩm giảm giá";

        $productAll = book::where('discount','>',0)->get();

        return view('user/product_discount/index',compact('title','productAll'));



    }
}
?>
