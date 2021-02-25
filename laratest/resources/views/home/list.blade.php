@extends('layout.common')

    @section('title')
        User List
    @endsection

    @section('css')
        table, th, td {
        border: 1px solid black;
        }
        td {
        padding: 3px;
        text-align: center;
        }
        nav a:nth-child(1) {
        margin-left: 0px;
        }
        nav a {
        margin-left: 10px;
        }
        .error-message {
        margin-top: 10px;
        font-weight: bold;
        color: red;
        }
        .success-message {
        margin-top: 10px;
        font-weight: bold;
        color: green;
        }
        @endsection

    @section('page-title')
        <h1>User List</h1>
    @endsection

    @section('main-content')
        <div id="container" class="container">

            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>USERNAME</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    <th>USER TYPE</th>
                    <th>ACTION</th>
                </tr>
                </thead>
                <tbody>
                @foreach($list as $item)
                    <tr>
                        <td>{{ $item['user_id'] }}</td>
                        <td>{{ $item['username'] }}</td>
                        <td>{{ $item['email'] }}</td>
                        <td>{{ $item['password'] }}</td>
                        <td>{{ $item['type'] }}</td>
                        <td>
                            <a href="{{ route('home.editUser', $item['user_id']) }}">Edit</a> |
                            <a href="{{ route('home.deleteUser', $item['user_id']) }}">Delete</a> |
                            <a href="{{ route('home.userDetails', $item['user_id']) }}">Details</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endsection

    @section('message')
        <div class="error-message">
            {{ session('error-msg') }}
        </div>
        <div class="success-message">
            {{ session('success-msg') }}
        </div>
    @endsection
