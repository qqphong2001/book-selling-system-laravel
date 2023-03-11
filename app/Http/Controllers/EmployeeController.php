<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function update_employee (Request $request,$id){

        $image = null;

        if($request->has('avatar')){
            $file = $request->file('avatar');
            $request->avatar->move(public_path('upload/employee/avatar'),$file->getClientOriginalName());
            $image = '/upload/employee/avatar/'.$request->file('avatar')->getClientOriginalName();
        };


        $employee = employee::where('account_id', $id)->first();
        if ($employee) {
            $employee->firstName = $request->input('firstname');
            $employee->lastName = $request->input('lastname');
            $employee->gender = $request->input('gender');
            $employee->dob = date("Y-m-d", strtotime($request->input('dob')));
            $employee->phoneNumber = $request->input('phonenumber');
            $employee->address = $request->input('address');
            $employee->avatar = $image;
            $employee->save();
        }
        else
        {
            employee::create([
                'firstName' =>$request->input('firstname'),
                'lastName' =>$request->input('lastname'),
                'gender' =>$request->input('gender'),
                'dob' =>date("Y-m-d", strtotime($request->input('dob'))),
                'phoneNumber' =>$request->input('phonenumber'),
                'address' =>$request->input('address'),
                'avatar' =>$image,
                'account_id'=>$id
            ]);
        }


        return redirect()->back();

    }


}
