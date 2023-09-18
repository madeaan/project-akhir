<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function checkLogin(Request $r){
        $email = $r->email;
        $password = $r->password;

        if($email == "admin"){
            if($password == "123"){
                return redirect(url('/dash'));
            }else{
                return redirect(url('/'));
            }
        }else{
            return redirect(url('/'));
        }

    }
}
