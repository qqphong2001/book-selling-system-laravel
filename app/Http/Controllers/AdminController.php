<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\author;
use App\Models\employee;
use App\Models\genre;
use App\Models\publisher;
use App\Models\role;
use App\Models\User;
use PhpParser\Node\Expr\FuncCall;

use function Ramsey\Uuid\v1;

class AdminController extends Controller{


    public function index(){


        return view('admin/index/index');


    }

    public function list_product(){

        $data = [

            'books' => book::get(),
            'authors'=>author::get(),
            'genres'=>genre::get(),
            'publishers'=>publisher::get()

        ];

        return view('admin/product/list_product')->with($data);

    }


    public function list_publisher(){
        $data = [
            'publishers' => publisher::get(),
        ];

        return view('admin/publisher/list_publiser')->with($data);
    }

    public function list_author(){

        $data = [

            'authors' => author::get()
        ];

        return view('admin/author/list_author')->with($data);

    }

    public function list_genre(){
        $data = [

            'genres' => genre::get()
        ];

        return view('admin/genre/list_genre')->with($data);

    }


    public function list_account(){
        $data = [
            'accounts' => User::join('role','role.id_role','=','users.role_id')->get(),
        ];

        return view('admin/account/list_account')->with($data);

    }

    public function list_role(){
        $data = [

            'roles' => role::get()
        ];

        return view('admin/role/list_role')->with($data);

    }

    public function employee($id){

        $data = [
            'employee' => employee::join('users','users.id','=','employee.account_id')->where('employee.account_id',$id)->first()
        ];

        return view('admin/employee/employee')->with($data);
    }


}

?>
