<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\Homcontroller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\VerificationController;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//home
Route::get('/', [Homcontroller::class,'index'])->name('home');


//login
Route::get('/account/login',[AccountController::class,'loginShow'])->name('login');

Route::get('/account/register',[AccountController::class,'registerShow'])->name('register');
Route::post('/account/process-register',[AccountController::class,'registerProcess']);
Route::post('/account/process-login',[AccountController::class,'loginProcess']);
Route::get('/account/logout',[AccountController::class,'logout']);







Route::group(['middleware' => ['auth']], function() {

    Route::get('/email/verify', [VerificationController::class,'show'])->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [VerificationController::class,'verify'])->name('verification.verify')->middleware(['signed']);
    Route::post('/email/resend',  [VerificationController::class,'resend'])->name('verification.resend');
    Route::group(['middleware' => ['verified']], function() {

    //user
    Route::middleware(['auth','roleUser'])->group(function(){

        Route::get('/index', [Homcontroller::class,'index'])->name('user');

    });

    //admin
    Route::middleware(['auth','roleAdmin'])->group(function(){

        Route::group(['prefix' => 'admin'],function(){


            Route::get('/',[AdminController::class,'index'])->name('admin');

            //product
            Route::get('/list_product',[AdminController::class,'list_product'])->name('list_product');
            Route::post('/add_product',[ProductController::class,'add_product']);
            Route::get('/delete_product',[AdminController::class,'list_product']);


            //publisher
            Route::get('/list_publisher',[AdminController::class,'list_publisher'])->name('list_publisher');
            Route::post('/add_publisher',[PublisherController::class,'add_publisher']);
            Route::get('/delete_publisher/{id}',[PublisherController::class,'detele_publisher']);

            //author
            Route::get('/list_author',[AdminController::class,'list_author'])->name('list_author');
            Route::post('/add_author',[AuthorController::class,'add_author']);
            Route::get('/delete_author/{id}',[AuthorController::class,'detele_author']);

            //genre
            Route::get('/list_genre',[AdminController::class,'list_genre'])->name('list_genre');
            Route::post('/add_genre',[GenreController::class,'add_genre']);
            Route::get('/delete_genre/{id}',[GenreController::class,'detele_genre']);

        });



    });
});


});



