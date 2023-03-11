<?php

namespace App\Http\Controllers;

use App\Models\role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function add_role(Request $request ){

        role::create([
            'name_role' => $request->input('name')
        ]);

        return redirect()->route('list_role');
    }

    public function detele_role($id){

        role::find($id)->delete();

        return redirect()->route('list_role');

    }
}
