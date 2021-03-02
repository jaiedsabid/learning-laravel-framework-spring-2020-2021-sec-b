@extends('layout.main')
    @section('nav-bar')
        <ul>
            <li><a href="{{ route('home.index') }}">Home</a></li>
            <li><a href="{{ route('sales.index') }}">Sales</a></li>
            <li><a href="{{ route('logout.index') }}">Logout</a></li>
        </ul>
    @endsection
    @section('footer')
        Copyright 2021
    @endsection
