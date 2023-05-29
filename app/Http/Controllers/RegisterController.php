<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
   /**
     *Task 1: Request Validation
    */


    public function ValidateAndRegister(Request $request)
    {
     //   dd($request->all());

        $request->validate(
            [
                'name'=>'required|string|min:2',
                'email'=>'required|email',
                'password'=>'required|string|min:8'
            ]
            );
            return back()->withSuccess('Register Success !!');

    }


}
