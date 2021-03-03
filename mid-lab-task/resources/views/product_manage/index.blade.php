@extends('layout.common')

    @section('title')
        Product Management
    @endsection

    @section('page-title')
        <h1>Product Management</h1>
    @endsection

    @section('content')
        <div class="products">
            <div class="existing">
                <h4>Total Existing Products: {{ $existing }}</h4>
            </div>
            <div class="upcoming">
                <h4>Total Upcoming Products: {{ $upcoming }}</h4>
            </div>
        </div>
    @endsection
