<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\login;

class logincontroller extends Controller
{
    public function store(Request $request){
        $login = new login;
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required',
        ]);

        $username=$request->username;
        $password=$request->password;
        $login=login::find($username);
        if(($username='uomcarrom')&&($password='uomcarrom@123'))
        {
            return view('welcome');
        }
        else
        {
            return redirect()->back();
        }
    }
}