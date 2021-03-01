@extends('layout.common')

    @section('title')
        Home
    @endsection

    @section('css')
        nav a:nth-child(1) {
        margin-left: 0px;
        }
        nav a {
        margin-left: 10px;
        }
        .error-msg {
        color: red;
        font-weight: bold;
        }
    @endsection

    @section('page-title')
        <h1>Welcome {{ session('username') }}!</h1>
    @endsection

    @section('main')
    @endsection

    @section('message')
        <div class="error-msg">
            {{ session('error-msg') }}
        </div>
    @endsection

