@extends('layout.main')

    @section('nav-bar')
        <nav>
            @if(\Illuminate\Support\Facades\Request::route()->getName() == 'home.userList')
                <a href="{{ route('home.index') }}">Back</a>
                <a href="{{ route('home.createUser') }}">Create User</a>
            @elseif(\Illuminate\Support\Facades\Request::route()->getName() == 'home.editUser')
                <a href="{{ route('home.userList') }}">Back</a>
            @elseif(\Illuminate\Support\Facades\Request::route()->getName() == 'home.userDetails')
                <a href="{{ route('home.userList') }}">Back</a>
            @else
                <a href="{{ route('home.index') }}">Home</a>
                <a href="{{ route('home.userList') }}">User list</a>
            @endif
            <a href="{{ route('logout.index') }}">Logout</a>
        </nav>
    @endsection

    @section('footer')
        Copyright© 2021-<?php echo date("Y");?>
    @endsection
