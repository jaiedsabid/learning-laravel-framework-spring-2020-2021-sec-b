<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Scalar\String_;
use App\Models\User;

class LoginControl extends Controller
{
    public function index() {
        return view('login.login');
    }

    public function verify(Request $req) {
        if($req->username == '' && $req->password == '') {
            $req->session()->flash('error-msg', 'Username & Password can\'t be empty');
            return redirect('/login');
        }
        else {
            $user = User::where('username', $req->username)
                ->where('password', $req->password)
                ->get();

            if(count($user) > 0)
            {
                $req->session()->put('username', $user[0]['username']);
                return redirect('/home');
            }
            else {
                $req->session()->flash('error-msg', 'Incorrect username or password!');
                return redirect('/login');
            }
        }
    }
}
