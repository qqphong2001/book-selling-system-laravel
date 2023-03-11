<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;

class AccountController extends Controller{

    //login
    public function loginShow(){
        return view('account/login');
    }

    public function loginProcess(Request $request){

        $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);

        $remember = $request->has('remember');


        if(Auth::attempt([
            'email' =>$request->input('email'),
            'password' =>$request->input('password'),
            'role_id'=> 1,
            'status' => 1

        ],$remember)){
            return redirect()->route('user');
        }

        elseif(Auth::attempt([
            'email' =>$request->input('email'),
            'password' =>$request->input('password'),
            'role_id'=> 3,

        ],$remember)){

            return redirect()->route('admin');

        }

        return redirect()->route('login');

    }

    public function logout(){
        Auth::logout();

        return redirect()->route('home');

    }


    //register
    public function registerShow(){

        return view('account/register');
    }


    public function registerProcess(Request $request){

        $this->validate($request, [
            'name'=> 'required|',
            'email' => 'required|email:filter',
            'password' => 'required',
            // 'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',

        ]);

        $user =   User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_id' => 3
        ]);

        event(new Registered($user));

        auth()->login($user);

        return redirect()->route('register');

    }


    public function edit_account($id){

        $data = [
            'account' => User::find($id),
            'roles' => role::get(),
            'account_role' =>role::join('users','users.role_id','=','role.id_role')->where('users.id',$id)->first()
        ];




        return view('admin/account/edit_account')->with($data);
    }

    public function update_account(Request $request,$id){


        $account = User::find($id);
        $account->name = $request->input('name');
        $account->role_id = $request->input('role');
        $account->status = $request->input('status');
        $account->update();
        return redirect()->route('list_account');
    }

}

?>
