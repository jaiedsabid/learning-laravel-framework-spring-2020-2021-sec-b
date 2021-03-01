<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginCheck;
use App\Models\Customer;
use Illuminate\Http\Request;

class Login extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function verify(LoginCheck $req)
    {
        $user_x = Customer::where($req->email)
                            ->where($req->password)
                            ->get();

        if(count($user_x) > 0)
        {
            return redirect()->route('home.index');
        }
    }
}
