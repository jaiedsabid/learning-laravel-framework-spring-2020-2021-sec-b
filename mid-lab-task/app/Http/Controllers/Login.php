<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class Login extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function verify(LoginRequest $req)
    {
        $user_x = Customer::where('email', $req->email)
                            ->where('password', $req->password)
                            ->get();

        if(count($user_x) > 0)
        {
            $req->session()->put('username', $user_x[0]['username']);
            return redirect()->route('home.index');
        }
        else
        {
            $req->session()->flash('error-msg', 'Incorrect username or password');
            return redirect()->route('login.index');
        }
    }
}
