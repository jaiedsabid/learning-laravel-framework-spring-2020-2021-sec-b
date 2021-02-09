<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $req) {
        if($req->session()->has('username')) {
            return view('home.index');
        }
        else {
            $req->session()->flash('error-msg', 'Unauthorized access!');
            return redirect('/login');
        }
    }

    public function userList(Request $req) {
        if($req->session()->has('username')) {
            $user_list = $this->getUserList();
            return view('home.list')->with('list', $user_list);
        }
        else {
            $req->session()->flash('error-msg', 'Unauthorized access!');
            return redirect('/login');
        }
    }

    public function editUser($id, Request $req) {
        if($req->session()->has('username')) {
            $userlist = $this->getUserList();
            $user = [];

            foreach($userlist as $suser) {
                if($suser['id'] == $id) {
                    $user = $suser;
                    break;
                }
            }
            return view('home.edit')->with('user', $user);
        }
        else {
            $req->session()->flash('error-msg', 'Unauthorized access!');
            return redirect('/login');
        }
    }

    public function updateUser($id, Request $req) {
        if($req->session()->has('username')) {
            $userlist = $this->getUserList();

            for($i = 0; $i < count($userlist); $i++) {
                if($userlist[$i]['id'] == $id) {
                    $userlist[$i]['name'] = $req->name;
                    $userlist[$i]['email'] = $req->email;
                    $userlist[$i]['password'] = $req->password;
                    break;
                }
            }

            return view('home.list')->with('list', $userlist);
        }
        else {
            $req->session()->flash('error-msg', 'Unauthorized access!');
            return redirect('/login');
        }

    }

    public function deleteUser($id, Request $req) {
        if($req->session()->has('username')) {
            return view('home.confirm');
        }
        else {
            $req->session()->flash('error-msg', 'Unauthorized access!');
            return redirect('/login');
        }
    }

    public function confirmDelete($id, Request $req) {
        if($req->session()->has('username')) {
            $userlist = $this->getUserList();

            if($req->confirm == 'Yes') {
                for($i = 0; $i < count($userlist); $i++) {
                    if($userlist[$i]['id'] == $id) {
                        unset($userlist[$i]);
                        break;
                    }
                }
            }
            else {
                $req->session()->flash('error-msg', 'Unable to delete the user!');
                return redirect('/home/userlist');
            }
            return view('home.list')->with('list', $userlist);
        }
        else {
            $req->session()->flash('error-msg', 'Unauthorized access!');
            return redirect('/login');
        }
    }

    public function createUser(Request $req) {
        if($req->session()->has('username')) {
            return view('home.create');
        }
        else {
            $req->session()->flash('error-msg', 'Unauthorized access!');
            return redirect('/login');
        }
    }

    public function storeUser(Request $req) {
        $userlist = $this->getUserList();
        $user = ['id'=>$req->id, 'name'=>$req->name, 'email'=>$req->email, 'password'=>$req->password];
        array_push($userlist, $user);

        return view('home.list')->with('list', $userlist);
    }

    public function getUserList() {
        $userList = [
            ['id'=>1, 'name'=>'jaiedsabid', 'email'=>'jaiedsabid@gmail.com', 'password'=>'12345'],
            ['id'=>2, 'name'=>'alamin', 'email'=>'alamin@aiub.edu', 'password'=>'123'],
            ['id'=>3, 'name'=>'abc', 'email'=>'abc@aiub.edu', 'password'=>'456'],
            ['id'=>4, 'name'=>'xyz', 'email'=>'xyz@aiub.edu', 'password'=>'789']
        ];

        return $userList;
    }
}
