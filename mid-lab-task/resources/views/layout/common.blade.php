@extends('layout.main')
    @section('nav-bar')
        <ul>
            <li><a href="{{ route('home.index') }}">Home</a></li>
            <li><a href="{{ route('sales.index') }}">Sales</a></li>
            <li><a href="{{ route('product_manage.index') }}">Product Management</a>
                <ul>
                    <li><a href="{{ route('products.existing') }}">Existing Products</a></li>
                    <li><a href="{{ route('products.upcoming') }}">Upcoming Products</a></li>
                    <li><a href="{{ route('products.add') }}">Add Products</a></li>
                </ul>
            </li>
            <li><a href="{{ route('logout.index') }}">Logout</a></li>
        </ul>
    @endsection
    @section('footer')
        Copyright 2021
    @endsection
