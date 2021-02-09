<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Scalar\String_;

class LoginControl extends Controller
{
    public function index() {
        return view('login.login');
    }

    public function verify(Request $req) {
        if(($req->username == $req->password) && ($req->username != '' && $req->password != ''))
        {
            $req->session()->put('username', $req->username);
            return redirect('/home');
        }
        else {
            $req->session()->flash('error-msg', 'Incorrect username or password!');
            return redirect('/login');
        }
    }
}
