<?php
 namespace App\Http\ViewComposers;

use App\Models\employee;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

 class layoutComposer
 {

     /**
      * Create a movie composer.
      *
      * @return void
      */
     public function __construct()
     {

     }

     /**
      * Bind data to the view.
      *
      * @param  View  $view
      * @return void
      */
     public function compose(View $view)
     {

        $image = employee::where('account_id',Auth::user()->id);


        if (!Auth::check()) {
            $image = '';
        }


        $data = [
            'employessp' => $image->first()
        ];
        $view->with($data);

     }
 }
