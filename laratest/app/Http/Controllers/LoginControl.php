<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginRequest;
use Illuminate\Http\Request;
use PhpParser\Node\Scalar\String_;
use App\Models\User;

class LoginControl extends Controller
{
    public function index() {
        return view('login.login');
    }

    public function verify(loginRequest $req) {
        $user = User::where('username', $req->username)
            ->where('password', $req->password)
            ->get();

        if(count($user) > 0)
        {
            $req->session()->put('username', $user[0]['username']);
            return redirect()->route('home.index');
        }
        else {
            $req->session()->flash('error-msg', 'Incorrect username or password!');
            return redirect()->route('login.index');
        }
    }
}
