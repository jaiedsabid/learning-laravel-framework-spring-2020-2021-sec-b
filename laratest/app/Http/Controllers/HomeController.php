<?php

namespace App\Http\Controllers;

use App\Http\Requests\confirmDelRequest;
use App\Http\Requests\createRequest;
use App\Http\Requests\editRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index() {
        return view('home.index');
    }

    public function userList() {
        $user_list = User::all();
        return view('home.list')->with('list', $user_list);
    }

    public function editUser($id) {
        $user = User::where('user_id', $id)->get();
        return view('home.edit')->with('user', $user[0]);
    }

    public function updateUser($id, editRequest $req) {

        $user = [
                'username'=>$req->username,
                'email'=>$req->email,
                'password'=>$req->password,
                'type'=>$req->type
        ];
        $updated = User::where('user_id', $id)
                        ->update($user);

        if($updated) {
            $req->session()->flash('success-msg', 'User Information updated successfully');
        }
        else {
            $req->session()->flash('error-msg', 'Unable to update User Information!');
        }

        return redirect()->route('home.userList');
    }

    public function deleteUser() {
        return view('home.confirm');
    }

    public function confirmDelete($id, confirmDelRequest $req) {
        $deleted = User::where('user_id', $id)->delete();
        if($deleted) {
            $req->session()->flash('success-msg', 'User deleted successfully');
        }
        else {
            $req->session()->flash('error-msg', 'User deletion failed!');
        }
        return redirect()->route('home.userList');
    }

    public function createUser() {
        return view('home.create');
    }

    public function storeUser(createRequest $req) {
        $user = new User();
        $user->username = $req->username;
        $user->email= $req->email;
        $user->password = $req->password;
        $user->type = $req->type;
        $created = $user->save();

        if($created) {
            $req->session()->flash('success-msg', 'User created successfully');
        }
        else {
            $req->session()->flash('error-msg', 'User creation failed!');
        }
        return redirect()->route('home.userList');
    }

    public function userDetails($id) {
        $user = User::find($id);
        return view('home.details')->with('user', $user);
    }

}
