@extends('layout.common')

    @section('title')
        Edit User
    @endsection

    @section('css')
        html {
            box-sizing: border-box;
        }

        a:nth-child(2) {
            margin-left: 10px;
        }
    @endsection

    @section('page-title')
        <h1>Edit User, {{ $user['user_id'] }}</h1>
    @endsection

    @section('main-content')
        <form method="post">
            @csrf
            <fieldset>
                <legend>Edit</legend>
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" value="{{ $user['username'] }}"></td>
                        <td>{{ $errors->first('username') }}</td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" value="{{ $user['password'] }}"></td>
                        <td>{{ $errors->first('password') }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email" value="{{ $user['email'] }}"></td>
                        <td>{{ $errors->first('email') }}</td>
                    </tr>
                    <tr>
                        <td>Type</td>
                        <td>
                            <select name="type" id="type">
                                <option value="member" @if($user['type'] == 'member') selected @endif>Member</option>
                                <option value="admin" @if($user['type'] == 'admin') selected @endif>Admin</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="update"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    @endsection
