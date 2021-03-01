<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class Signup extends Controller
{
    public function index()
    {
        return view('signup.index');
    }

    public function store(SignupRequest $req)
    {
        $user = new Customer();
        $user->fullname = $req->fullname;
        $user->username = $req->username;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->city = $req->city;
        $user->country = $req->country;
        $user->phone = $req->phone;
        $user->company = $req->company;
        $user->usertype = $req->usertype;
        $success = $user->save();

        if($success)
        {
            $req->session()->flash('success', 'Registration Successful.');
            return redirect()->route('login.index');
        }
        else
        {
            $req->session()->flash('error-msg', 'Registration failed!');
            return redirect()->back();
        }
    }
}
